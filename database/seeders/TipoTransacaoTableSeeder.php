<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TipoTransacaoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tipo_transacao')->delete();
        
        \DB::table('tipo_transacao')->insert(array (
            0 => 
            array (
                'id' => 1,
                'tipo' => 1,
                'descricao' => 'debito',
                'natureza' => 'entrada',
                'sinal' => '+',
            ),
            1 => 
            array (
                'id' => 2,
                'tipo' => 2,
                'descricao' => 'boleto',
                'natureza' => 'saida',
                'sinal' => '-',
            ),
            2 => 
            array (
                'id' => 3,
                'tipo' => 3,
                'descricao' => 'financiamento',
                'natureza' => 'saida',
                'sinal' => '-',
            ),
            3 => 
            array (
                'id' => 4,
                'tipo' => 4,
                'descricao' => 'credito',
                'natureza' => 'entrada',
                'sinal' => '+',
            ),
            4 => 
            array (
                'id' => 5,
                'tipo' => 5,
                'descricao' => 'recebimento emprestimo',
                'natureza' => 'entrada',
                'sinal' => '+',
            ),
            5 => 
            array (
                'id' => 6,
                'tipo' => 6,
                'descricao' => 'vendas',
                'natureza' => 'entrada',
                'sinal' => '+',
            ),
            6 => 
            array (
                'id' => 7,
                'tipo' => 7,
                'descricao' => 'recebimento ted',
                'natureza' => 'entrada',
                'sinal' => '+',
            ),
            7 => 
            array (
                'id' => 8,
                'tipo' => 8,
                'descricao' => 'recebimento doc',
                'natureza' => 'entrada',
                'sinal' => '+',
            ),
            8 => 
            array (
                'id' => 9,
                'tipo' => 9,
                'descricao' => 'aluguel',
                'natureza' => 'saida',
                'sinal' => '-',
            ),
        ));
        
        
    }
}