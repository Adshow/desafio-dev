<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\TransacaoRepository;


class FileController extends Controller
{
    public function __construct(TransacaoRepository $TransacaoRepository)
    {
        $this->TransacaoRepository = $TransacaoRepository;
    }
    
    function parserCnab(Request $request)
    {
        try
        {
            $file_handle = $this->openFile($request->file('file'));
        
            while(!feof($file_handle)){

                $line = fgets($file_handle);
                
                $transacao = array();

                $transacao['tipo']= $this->getInfo($line, 0, 1);
                $transacao['data']= $this->getInfo($line, 1, 8);
                $transacao['valor']= $this->normalize($this->getInfo($line, 9, 10));
                $transacao['cpf']= $this->getInfo($line, 19, 11);
                $transacao['cartao']= $this->getInfo($line, 30, 12);
                $transacao['hora']= $this->getInfo($line, 42, 6);
                $transacao['dono']= trim($this->getInfo($line, 48, 14));
                $transacao['loja']= trim($this->getInfo($line, 62, 19));

                $this->TransacaoRepository->store($transacao);
                
                
            }
            fclose($file_handle);
            dd("ca");
        }
        catch(\Exception $e)
        {
            return response()->json($e->getMessage(), 500);
        }

        
    }

    function openFile($file)
    {
        $file->move('uploads', $file->getClientOriginalName());

        return fopen("uploads/".$file->getClientOriginalName(), 'r');
    }

    function getInfo($string, $start, $length)
    {
        return substr($string, $start, $length);
    }

    function normalize($value)
    {
        return $value/100.00;
    }
}