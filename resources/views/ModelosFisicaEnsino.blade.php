<!DOCTYPE html>
<html lang="en">
<head>
    <title>Fisica</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-info navbar-dark">
    <div class="container-fluid ">
        <div class="navbar-header ">
            <a class="navbar-brand" href="{{route('Home')}}">Homepage</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Cadastro</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
        <form class="navbar-form navbar-right" action="/action_page.php">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Pesquisar">
                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                        <i class="glyphicon glyphicon-search"></i>
                    </button>
                </div>
            </div>
        </form>
        <ul class="nav navbar-nav navbar-right">

            <li><a href="#">Destaques</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Disciplinas
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('Fisica')}}">Fisica</a></li>
                    <li><a href="#">Quimica</a></li>
                    <li><a href="#">Biologia</a></li>
                </ul>
            </li>
            <li><a href="#">Ultimos postados</a></li>

        </ul>
    </div>
</nav>

<div class="container">
    <div class="row ">
        <div class="col-md-12 mx-auto">
            <a href="{{route('Modelo')}}">
                <div class="jumbotron">
                    <div class="container">
                        <h5>Titulo Modelo</h5>
                        <p>Descrição Modelo -  tal tala tla</p>
                    </div>
                </div>
            </a>
            <div class="jumbotron">

                <h5>Modelo 2</h5>
                <p>Modelos de fisica do ensino médio</p>
            </div>
            <div class="jumbotron">
                <h5>Modelo 3</h5>
                <p>Modelos de fisica do ensino médio</p>
            </div>
            <div class="jumbotron">
                <h5>Modelo 4</h5>
                <p>Modelos de fisica do ensino médio</p>
            </div>
        </div>
    </div>
</div>



<hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" >

<footer class="page-footer font-small "  style="padding-left: 0px;">

    <div class="container text-center text-md-left " >


        <div class="row dark-gray-text">

            <div class="col-md-3 mx-auto">

                <!-- Links -->
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Netlogo</h5>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>Utilize a ferramenta</p>


            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 mx-auto">

                <!-- Links -->
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Disciplinas</h5>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <ul class="list-unstyled">
                    <li>
                        <a href="{{route('Fisica')}}">Fisica</a>
                    </li>
                    <li>
                        <a href="#">Quimica</a>
                    </li>
                    <li>
                        <a href="#">Biologia</a>
                    </li>
                    <li>
                        <a href="#">Matematica</a>
                    </li>
                </ul>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            </div>
            <!-- Grid column -->



            <!-- Grid column -->
            <div class="col-md-3 mx-auto">

                <!-- Links -->
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4"><a href="/"> Destaques</a></h5>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">


            </div>
            <!-- Grid column -->



            <!-- Grid column -->
            <div class="col-md-3 mx-auto">

                <!-- Links -->
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4"><a href="/">Ultimos postados</a></h5>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

</footer>
<!-- Footer -->

</body>
</html>
