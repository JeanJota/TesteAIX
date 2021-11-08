<?php

namespace App\Http\Controllers;

use App\Models\curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = curso::all();

        return view('listarcursos', ['cursos' => $cursos]);
    }

    public function create(curso $curso, Request $request)
    
    {
        $curso = new curso;

        $curso->codigo = $request->codigo;
        $curso->nome = $request->nome;
        
        $curso->save();

        return view('cadastrarcurso')->with('msg', 'Curso cadastrado com sucesso!');

    }

    public function show()
    {
        return view('cadastrarcurso');
    }

    public function edit($id)
    {
        $cursos = curso::findOrFail($id);

        return view('curso', ['cursos' => $cursos]);
    }

    public function update(Request $request)
    {
        curso::findOrFail($request->id)->update($request->all());

        return redirect('listarcursos');
    }

    public function destroy($id)
    {
        curso::findOrFail($id)->delete();

        return redirect('listarcursos');
    }

    public function importarxml()
    {
        $xml = simplexml_load_file('../storage/cursos.xml');

        foreach($xml->curso as $registro):

            $importarnome = $registro->nome;
            $importarcodigo = $registro->codigo;

            $cursos = curso::find($importarcodigo);

            if ($cursos == NULL)
            {
                $curso = new curso;
                curso::create(['nome'=>$importarnome,'codigo'=>$importarcodigo]);
                $curso->save();
            }
         
        endforeach;

        $cursos = curso::all();

        return view('listarcursos', ['cursos' => $cursos]);
    }
}
