<?php

namespace App\Http\Controllers;

use App\Models\curso;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Print_;
use PhpParser\Node\Stmt\Echo_;

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

            $importarcodigo = $registro->codigo;
            $importarnome = $registro->nome;

            if (curso::where('codigo',$importarcodigo)->first()){}
            else
            {
                if ($importarcodigo == "" or $importarcodigo == NULL){}
                elseif ($importarnome === "" or $importarnome === NULL){}
                else
                {
                    $curso = new curso;
                    curso::create(['codigo'=>$importarcodigo, 'nome'=>$importarnome]);
                    $curso->save();
                }
            }
         
        endforeach;

        $cursos = curso::all();

        return view('listarcursos', ['cursos' => $cursos]);
    }
}
