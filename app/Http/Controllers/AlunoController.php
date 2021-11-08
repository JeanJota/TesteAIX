<?php

namespace App\Http\Controllers;

use App\Models\aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{    
    public function index()
    {
        $alunos = aluno::all();

        return view('listaralunos', ['alunos' => $alunos]);
    }

    public function create(aluno $aluno, Request $request)
    
    {
        $aluno = new aluno;

        $aluno->matricula = $request->matricula;
        $aluno->nome = $request->nome;
        $aluno->situacao = $request->situacao;
        $aluno->curso = $request->curso;
        $aluno->turma = $request->turma;
        $aluno->datamtr = $request->datamtr;
        $aluno->cep = $request->cep;
        $aluno->uf = $request->uf;
        $aluno->cidade = $request->cidade;
        $aluno->bairro = $request->bairro;
        $aluno->endereco = $request->endereco;
        $aluno->complemento = $request->complemento;
        
        if($request->hasFile('foto') && $request->file('foto')->isValid())
        {
            $requestimage = $request->foto;

            $extension = $requestimage->extension();

            $imagename = md5($requestimage->getClientOriginalName() . strtotime('now')) . "." . $extension;

            $requestimage->move(public_path('images/alunos'), $imagename);

            $aluno->foto = $imagename;
        }
        
        $aluno->save();

        session_start();

        return view('cadastraraluno')->with('msg', 'Aluno cadastrado com sucesso!');

    }

    public function show()
    {
        
    }

    public function edit($id)
    {
        $alunos = aluno::findOrFail($id);

        return view('aluno', ['alunos' => $alunos]);
    }

    public function update(Request $request)
    {
        $data = $request->all();

        if($request->hasFile('foto') && $request->file('foto')->isValid())
        {
            $requestimage = $request->foto;

            $extension = $requestimage->extension();

            $imagename = md5($requestimage->getClientOriginalName() . strtotime('now')) . "." . $extension;

            $requestimage->move(public_path('images/alunos'), $imagename);

            $data['foto'] = $imagename;
        }

        aluno::findOrFail($request->id)->update($data);

        return redirect('listaralunos');
    }

    public function destroy($id)
    {
        aluno::findOrFail($id)->delete();

        return redirect('listaralunos');
    }
}
