<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>AIX Sistemas - Administração</title>
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon.png">

    <link rel="stylesheet" href="../vendor/jsgrid/css/jsgrid.min.css">
    <link rel="stylesheet" href="../vendor/jsgrid/css/jsgrid-theme.min.css">
    <link rel="stylesheet" href="../vendor/footable/css/footable.bootstrap.min.css">    
    <link rel="stylesheet" href="../vendor/jquery-bootgrid/dist/jquery.bootgrid.min.css">
    <link rel="stylesheet" href="../vendor/owl.carousel/dist/css/owl.carousel.min.css">

    <link href="../css/style.css" rel="stylesheet">
</head>
<body>
    <div id="preloader"><div class="spinner"><div class="spinner-a"></div><div class="spinner-b"></div></div></div>
    <div id="main-wrapper">
        <div class="nav-header">
            <div class="brand-logo">
                <a href="#">
                    <b class="logo-abbr">AIX </b>
                    <span class="brand-title">AIX</span>
                </a>
            </div>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="toggle-icon"><i class="icon-menu"></i></span>
                </div>
            </div>
        </div>
        <div class="header">    
            <div class="header-content clearfix">
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons">
                            <div class="user-img c-pointer">
                                <img src="../images/users/1.jpg" height="40" width="40" alt="avatar">
                                <strong class="ml-2">AIX Sistemas <span><i class="fa fa-caret-down ml-2"></i></span></strong>

                            </div>
                            <div class="drop-down dropdown-profile animated flipInX">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li><a href="../painel">Início</a></li>
                                        <li><a href="../cadastraraluno">Cadastrar Aluno</a></li>
                                        <li><a href="../cadastrarcurso">Cadastrar Curso</a></li>
                                        <li><a href="../listaralunos">Listar Alunos</a></li>
                                        <li><a href="../listarcursos">Listar Cursos</a></li>
                                        <li><a href="../importarcursos">Importar Cursos XML</a></li>
                                        <li><a href="../logout">Sair do Sistema</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Menu</li>
                    <li><a href="../painel" aria-expanded="false"><i class="mdi mdi-speedometer"></i><span class="nav-text">Início</span></a></li>
                    <li><a href="../cadastraraluno" aria-expanded="false"><i class="mdi mdi-file-document-box"></i><span class="nav-text">Cadastrar Usuário</span></a></li>
                    <li><a href="../cadastrarcurso" aria-expanded="false"><i class="mdi mdi-file-document-box"></i><span class="nav-text">Cadastrar Cursos</span></a></li>
                    <li><a href="../listaralunos" aria-expanded="false"><i class="mdi mdi-table"></i><span class="nav-text">Listar Alunos</span></a></li>
                    <li><a href="../listarcursos" aria-expanded="false"><i class="mdi mdi-table"></i><span class="nav-text">Listar Cursos</span></a></li>
                    <li><a href="../importarcursos" aria-expanded="false"><i class="mdi mdi-table"></i><span class="nav-text">Importar Cursos XML</span></a></li>
                    <li><a href="../logout" aria-expanded="false"><i class="mdi mdi-table"></i><span class="nav-text">Sair do Sistema</span></a></li>
                </ul>
            </div>
        </div>

        <div class="content-body">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="breadcrumb-range-picker">
                        <span><i class="icon-calender"></i></span>
                        <span class="ml-1">@if(session('msg')) {{ session('msg') }} @endif</span>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Modificar Curso:</h4>
                                <div class="form-validation" id="app">
                                    <form class="form-valide" action="{{ $cursos->id }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label">Código <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="codigo" placeholder="Código" required value="{{ $cursos->codigo }}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label">Curso <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="nome" placeholder="Nome Curso" required value="{{ $cursos->nome }}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-8 ml-auto">
                                                        <button type="submit" class="btn btn-primary">Modificar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

<div class="footer">
            <div class="copyright">
                <p>Copyright © AIX Sistemas 2021</p>
            </div>
        </div>
    </div>

    <script src="../vendor/common/common.min.js"></script>
    <script src="../js/custom.min.js"></script>
    <script src="../js/settings.js"></script>
    <script src="../js/quixnav.js"></script>

    <script src="../vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="../vendor/jsgrid/js/jsgrid.min.js"></script>
    <script src="../vendor/footable/js/footable.min.js"></script>
    <script src="../vendor/jquery-bootgrid/dist/jquery.bootgrid.min.js"></script>    
    <script src="../vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="../vendor/webticker/jquery.webticker.min.js"></script>
    <script src="../vendor/flot/jquery.flot.js"></script>
    <script src="../vendor/jquery.counterup/jquery.counterup.min.js"></script>

    <script src="../js/dashboard/dashboard-1.js"></script>

</body>
</html>