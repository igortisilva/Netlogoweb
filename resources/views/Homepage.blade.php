<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
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
            <a class="navbar-brand" href="#">Homepage</a>
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
                    <li><a href="#">Fisica</a></li>
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
        <div class="col-md-6 mx-auto">
            <h3>Netlogo</h3>
            <p>Ferramenta tal tal tal</p>
        </div>
        <div class="col-md-6 mx-auto">
            <h3>Video demo</h3>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/DYyoKl8wqGk" allowfullscreen></iframe>
            </div>



        </div>
    </div>
    <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
    <div class="row ">
        <div class="col-md-6 mx-auto">
            <h3>Destaques</h3>
            <p>modelo 2</p>
            <p>modelo 4</p>
            <p>modelo 9</p>
            <p>modelo 5</p>
        </div>
        <div class="col-md-6 mx-auto">
            <h3>Ultimos modelos postados</h3>
            <p>modelo 12</p>
            <p>modelo 11</p>
            <p>modelo 10</p>
            <p>modelo 9</p>
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
                        <a href="#">Fisica</a>
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
