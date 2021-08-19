<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class FileController extends Controller
{
    function parserCnab(Request $request)
    {


        $file_handle = $this->openFile($request->file('file'));
    

        while(!feof($file_handle)){

            $line = fgets($file_handle);
            dd($line);
        }

        
    }

    function openFile($file)
    {
        $file->move('uploads', $file->getClientOriginalName());

        return fopen("uploads/".$file->getClientOriginalName(), 'r');
    }
}