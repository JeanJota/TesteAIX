@include('menu');

        <div class="content-body">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="content-heading">Listando Cursos </h3>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>                                                
                                                <th>Código</th>
                                                <th>Curso</th>
                                                <th>Modificar</th>
                                                <th>Deletar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($cursos as $curso)
                                            <tr>
                                                <td>{{ $curso->codigo }}</td>
                                                <td>{{ $curso->nome }}</td>
                                                <td><a href="curso/{{ $curso->id }}" class="btn btn-info">Editar</a></td>
                                                <td><form action="curso/{{ $curso->id }}" method="POST">
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