<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;

class PessoasController extends Controller
{
    public function all()
    {
        try {
            $pessoas = Pessoa::all();
            $message = $pessoas->count()." ". ($pessoas->count() === 1 ? "pessoa encontrada" : "pessoas encontradas")." com sucesso.";
            return $this->response($message, $pessoas);
        } catch (\Exception $execption) {
            return $this->response($execption->getMessage(), null, false, 500);
        }
    }
}
