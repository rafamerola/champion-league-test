<?php

namespace App\Http\Controllers;

use App\Models\Teams;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeamsController extends Controller
{
    const MODEL = "App\Models\Teams";

    /** Função add()para adicionar os Times */
    public function add(Request $request) {
		try {
            DB::beginTransaction();
            $teams = Teams::create($request->all());
			DB::commit();
			return response()->json($teams);
		} catch (Exception $e) {
			DB::rollBack();
			return response()->json($e->getMessage());
		}
	}


/** Função showTeams() para retornar as informações de todos os times (PS: não foi solicitado a informação de todo os jogadores daquele time, caso necessário por gentileza informar) */

    public function showTeams() {
        $teams = DB::table('teams')->get();
 /*        return view('teams', ['team' => $teams]); */
        return json_encode($teams);
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teams  $teams
     * @return \Illuminate\Http\Response
     */

     /** Função update() atualiza as informações do time passando os parametros via POST */
    public function update(Request $request, $id)
    {
        $teams = Teams::where('id', '=', $id)->first();
        $teams->update($request->all());
        return $teams;
    }

       /** Função delete() deleta o time recebendo o id do time pela url, com o parametro DELETE */
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
