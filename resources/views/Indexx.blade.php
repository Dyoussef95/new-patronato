<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>
    <link rel="stylesheet" href="../../thirdparty/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="../../fontawesome/css/all.css">
    <!--<link href="../../select2/select2.min.css" rel="stylesheet" />-->
    @yield('styles')
</head>
<body class="body">
    <div class="mask" id="mask" onclick="closeForm()"></div>
    <div class="sidebar">
        <div class="menu">
            <h1>PATRONATO</h1>
            <li class="item"  id='administracion'>
                <a class="butn"><i class="fas fa-users-cog"></i>Administracion</a>
                <div class="smenu">
                    <a class="op" id="asistidos" href="internos">Asistidos</a>
                    <a class="op" id="personal" href="personal" >Personal</a>
                </div>
            </li>
            <li class="item" id="prision">
                <a class="butn"><i class="fas fa-home"></i>Prision Domiciliaria</a>
                <div class="smenu">
                    <a class="op" href="sexos/create">Asistidos</a>
                    <a class="op" >Personal</a>
                    <a class="op" >Datos</a>
                </div>
            </li>
            <li class="item" id='medio'>
                <a class="butn"><i class="fas fa-door-open"></i>Medio Libre</a>
                <div class="smenu">
                    <a class="op" >Asistidos</a>
                    <a class="op" >Personal</a>
                    <a class="op" >Datos</a>
                </div>
            </li>
            <li class="item" id="ejecucion">
                <a class="butn"><i class="fas fa-lock"></i>Ejecución de la Pena</a>
                <div class="smenu">
                    <a >Asistidos</a>
                    <a >Personal</a>
                    <a >Datos</a>
                </div>
            </li>
            <li class="item" id='logout'>
                <a href="" class="butn">Logout</a>
            </li>
        </div>
    </div>
    <div class="content open">
        <i class="fas fa-bars"  style="font-size: 50px"></i>
        <div class="container-fluid">
            @yield('content')
        </div>
        
    </div>
    
    <script src="../../thirdparty/bootstrap-4.3.1-dist/js/bootstrap.js"></script>
    <script src="../../thirdparty/jquery-3.4.1.min.js"></script>
    <script src="../../js/script.js"></script>
    <!--<script src="/../../select2/select2.min.js"></script>-->
    @yield('scripts')
</body>
</html>