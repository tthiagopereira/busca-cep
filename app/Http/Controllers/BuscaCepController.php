<?php

namespace App\Http\Controllers;

use App\Models\Endereco;
use Illuminate\Http\Request;

class BuscaCepController extends Controller
{
    public function buscaCep($cep) {

        $register = Endereco::where('cep', $cep)->get();

        if(is_null($register)) {
            return response()->json($register);
        }

        $json = file_get_contents('https://viacep.com.br/ws/'. $cep . '/json/');

        $cepArray = json_decode($json);
        return response()->json($cepArray);
    }

    public function buscaCepMult($uf, $cidade,$logradouro)
    {
        $json = file_get_contents('https://viacep.com.br/ws/'. $uf . '/' .$cidade.'/'.$logradouro.'/json/');
        if(is_null($json)) {
            return response()->json(['message'=> 'Localidade não encontrado']);
        }
        $cepArray = json_decode($json);
        return response()->json($cepArray);
    }
}
