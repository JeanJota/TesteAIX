<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{    
    public function login(Request $request)
    {
        if(isset($_SESSION['id_admin']))
        {
            $admins = admin::where('id', '=', $_SESSION['id_admin'])->first();

            return view('painel', ['admins' => $admins]);
        }
        else
        {
            $email = $request->email;
            $senha = $request->senha;

            $admins = admin::where('email', '=', $email)->where('senha', '=', $senha)->first();

            if(@$admins->id != null)
            {
                @session_start();
                $_SESSION['id_admin'] = $admins->id;
                $_SESSION['email_admin'] = $admins->email;
                $_SESSION['senha_admin'] = $admins->senha;

                return view('painel', ['admins' => $admins]);
            }
            else
            {
                return view('login');
            }
            return view('login');
        }
        
    }

    public function logout()
    {
        @session_start();
        @session_destroy();
        return view('login');
    }

    public function cadastraraluno()
    {
        return view('cadastraraluno');
    }

    public function cadastrarcurso()
    {
        return view('cadastrarcurso');
    }

    public function listaralunos()
    {
        return view('listaralunos');
    }
}
