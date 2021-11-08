<html class="h-100">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>AIX Sistemas - Administração</title>
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="css/style.css" rel="stylesheet">   
</head>
<body class="h-100">
    <div id="preloader"><div class="spinner"><div class="spinner-a"></div><div class="spinner-b"></div></div></div>
    <div class="login-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-md-5">
                    <div class="form-input-content">
                        <div class="card card-login">
                            <div class="card-header text-center d-block">
                                <a href="#">
                                    <h2 class="mb-0 p-2"><strong>AIX Sistemas</strong></h2>
                                </a>
                            </div>
                            <div class="text-center my-3">
                                <h4 class="mb-0 p-2"><strong>Administração</strong></h4>
                            </div>
                            
                            <div class="card-body">
                                <form action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div class="form-group mb-4">
                                        <input type="email" class="form-control" name="email" placeholder="admin@aixsistemas.com.br" value="admin@aixsistemas.com.br{{ old('email') }}" >
                                    </div>
                                    <div class="form-group mb-4">
                                        <input type="password" class="form-control" name="password" placeholder="Chave de Acesso" value="123456{{ old('senha') }}">
                                    </div>
                                    <button class="btn btn-primary btn-block border-0" type="submit">Entrar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="vendor/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/quixnav.js"></script>

</body>
</html>