<?php

namespace App\Http\Controllers;

use App\Models\Matches;
use App\Models\Teams; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class MatchesController extends Controller
{
    const MODEL = "App\Models\Matches";


/** Função Add para adicionar as partidas, salvando no banco de dados 
 * e retornando os dados cadastrados caso sucesso, 
 * em caso de erro retorna mensagem de erro */

    public function add(Request $request) {
		try {
            DB::beginTransaction();
            $matches = Matches::create($request->all());
			DB::commit();
			return response()->json($matches);
		} catch (Exception $e) {
			DB::rollBack();
			return response()->json($e->getMessage());
		}
	}



/** Função para retornar todas as partidas e com os respectivos dados dos times (nome e imagem) */

    public function showMatches() {
        $matches = \App\Models\Matches::with('teamshouse:id,name,image')->with('teamsguest:id,name,image')->get();
        if(sizeof($matches) > 0) {
            $matchEvent = [];
            foreach($matches as $match){
                array_push( $matchEvent, $match);
            }
        }
        return json_encode($matchEvent);
        
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Matches  $matches
     * @return \Illuminate\Http\Response
     */

     /** Função para alterar o jogo a partir do id, com os dados enviados via post*/
    public function update(Request $request, $id)
    {
        $matches = Matches::where('id', '=', $id)->first();
        $matches->update($request->all());
        return $matches;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Matches  $matches
     * @return \Illuminate\Http\Response
     */

     /** Função para deletar a partida, recebe o id e executa via method delete*/
    public function delete(Request $request, $id)
    {
        $m = self::MODEL;
        if (is_null($m::find($id))) {
            return 'not_found';
        }
        $m::destroy($id);
        return $id.' '.'Excluido com Sucesso.';
    }
}
