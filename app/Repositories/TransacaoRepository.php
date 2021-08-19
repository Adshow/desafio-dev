<?php
namespace App\Repositories;
use App\Models\Transacao;
class TransacaoRepository
{
    public function store($transacao)
    {
        try{

            \DB::beginTransaction();

            $transacao = new Transacao($transacao);
            
            $transacao->save();
            \DB::commit();
            return;
            
            
        }
        catch(\Exception $e)
        {
            \DB::rollback();
            return $e;
        }
    }
}