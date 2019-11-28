<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>VOo | Login</title>

    <link href="Content/bootstrap.min.css" rel="stylesheet">
    <link href="Fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="Content/animate.css" rel="stylesheet">
    <link href="Content/style.css" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="middle-box text-center loginscreen  animated fadeInDown">
        <div>
            <div>
                <h1 class="logo-name">VOo</h1>
            </div>
            <h3>Bem vindo ao Sistema de Vendas de Passagens aéreas</h3>
            <p>Entre para ver mais informações.</p>
            <form class="m-t" role="form" action="login" method="POST">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Username" name="username" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="password" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                <a href="forgot-password"><small>Esqueceu sua senha?</small></a>
                <p class="text-muted text-center"><small>Não tem uma conta?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register">Criar nova Conta</a>
            </form>
            <p class="m-t"> <small>Evandro Alessi & Eric Ueta &copy; 2019</small> </p>
        </div>
    </div>
</body>
</html>
