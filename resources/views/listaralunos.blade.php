@include('menu');
<link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
        <div class="content-body">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="content-heading">Listando alunos cadastrados </h3>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>                                                
                                                <th>Matrícula</th>
                                                <th>Nome Completo</th>
                                                <th>Situação</th>
                                                <th>Curso</th>
                                                <th>Turma</th>
                                                <th>Data da Matrícula</th>
                                                <th>CEP</th>
                                                <th>UF</th>
                                                <th>Cidade</th>
                                                <th>Endereço</th>
                                                <th>Editar</th>
                                                <th>Deletar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($alunos as $aluno)
                                            <tr>
                                                <td>{{ $aluno->matricula }}</td>
                                                <td>{{ $aluno->nome }}</td>
                                                <td>{{ $aluno->situacao }}</td>
                                                <td>{{ $aluno->curso }}</td>
                                                <td>{{ $aluno->turma }}</td>
                                                <td>{{ date("d/m/Y", strtotime($aluno->datamtr)) }}</td>
                                                <td>{{ $aluno->cep }}</td>
                                                <td>{{ $aluno->uf }}</td>
                                                <td>{{ $aluno->cidade }}</td>
                                                <td>{{ $aluno->bairro }} - {{ $aluno->endereco }}</td>
                                                <td><a href="aluno/{{ $aluno->id }}" class="btn btn-info">Editar</a></td>
                                                <td><form action="aluno/{{ $aluno->id }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" name="deleta" class="btn btn-danger">Deletar</button>
                                                    </form></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>

    <script src="vendor/common/common.min.js"></script>

    <script src="js/styleSwitcher.js"></script>

    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>

    <script src="js/plugins-init/jsgrid-init.js"></script>
    <script src="js/plugins-init/footable-init.js"></script>
    <script src="js/plugins-init/jquery.bootgrid-init.js"></script>
    <script src="js/plugins-init/datatables.init.js"></script>

@include('rodape');