<?php

namespace App\Http\Controllers;

use App\Models\Players;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlayersController extends Controller
{
    const MODEL = "App\Models\Players";

   
    /** Função add()para adicionar os Jogadores */
    public function add(Request $request) {
		try {
            DB::beginTransaction();
            $player = Players::create($request->all());
			DB::commit();
			return response()->json($player);
		} catch (Exception $e) {
			DB::rollBack();
			return response()->json($e->getMessage());
		}
	}

/** Função showTeams() para retornar as informações de todos os jogadores (PS: não foi solicitado a informação do time que o jogador pertence, caso necessite por favor informar.) */
    public function showPlayers() {
        $players = DB::table('players')->get();
    /*     return view('players', ['player' => $players]); */
        return json_encode($players);
    }

   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Players  $players
     * @return \Illuminate\Http\Response
     */

      /** Função update() atualiza as informações do time passando os parametros via POST */
    public function update(Request $request, $id)
    {
        $player = Players::where('id', '=', $id)->first();
        $player->update($request->all());
        return $player;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Players  $players
     * @return \Illuminate\Http\Response
     */
    /** Função delete() deleta o time recebendo o id do Jogador pela url, com o parametro DELETE */
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
