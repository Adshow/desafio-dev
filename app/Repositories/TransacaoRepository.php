<?php
namespace App\Repositories;
use App\Models\Transacao;
use Illuminate\Support\Facades\DB;
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

    public function getLojas()
    {
        return DB::table('transacao as t')
        ->select('t.loja as nome')
        ->groupBy('t.loja')
        ->get();
    }

    public function getOperacaoByLoja($loja)
    {
        return DB::table('transacao as t')
        ->join('tipo_transacao as tt', 'tt.tipo', '=', 't.tipo')
        ->select('t.tipo', 't.data', 't.valor', 't.cpf', 't.cartao', 't.hora', 't.dono', 't.loja', 'tt.descricao', 'tt.natureza', 'tt.sinal')
        ->where('t.loja', '=', $loja)
        ->get();
    }
}