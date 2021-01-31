<?php

namespace App\Http\Controllers;

use App\Models\Endereco;
use Illuminate\Http\Request;

class EnderecoController extends Controller
{

    public function index()
    {
        return response()->json(Endereco::all());
    }


    public function store(Request $request)
    {
        $register = new Endereco();
        $register->fill($request->all());
        $register->save();
        return response()->json($register);
    }

    public function show($id)
    {
        $register = Endereco::find($id);
        if(!$register) {
            $this->messageNaoEcontrado();
        }
        return response()->json($register);
    }

    public function update(Request $request, $id)
    {
        $register = Endereco::find($id);

        if(!$register) {
            $this->messageNaoEcontrado();
        }
        return response()->json(['message'=> 'Atualizado com sucesso']);
    }

    public function destroy($id)
    {
        $register = Endereco::find($id);
        if(!$register) {
            $this->messageNaoEcontrado();
        }
        $register->delete();
        return response()->json(message);
    }

}
