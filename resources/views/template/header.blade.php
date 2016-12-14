<header id="header-navbar" class="content-mini content-mini-full">
    <div class="content-boxed ">
        <ul class="nav-header pull-right">
            <li class="hidden-md hidden-lg">
                <button class="btn btn-link text-white pull-right" data-toggle="class-toggle" data-target=".js-nav-main-header" data-class="nav-main-header-o" type="button">
                    <i class="fa fa-navicon fa-2x"></i>
                </button>
            </li>
        </ul>
        <ul class="js-nav-main-header nav-main-header push-5-t pull-right">
            <li class="text-right hidden-md hidden-lg">
                <button class="btn btn-link text-white" data-toggle="class-toggle" data-target=".js-nav-main-header" data-class="nav-main-header-o" type="button">
                    <i class="fa fa-times"></i>
                </button>
            </li>
            <li>
                <a class="h4 active text-center text-white font-w400" href="#">Inicio</a>
            </li>
            <li>
                <a class="h4 text-center text-white font-w400" href="{{ url('caracteristicas') }}">Características</a>
            </li>
            <li>
                <a class="h4 text-center text-white font-w400" href="{{ url('planes') }}">Planes</a>
            </li>
            <li>
                <a class="h4 text-center text-white font-w400" href="https://app.contapp.com.co">Login</a>
            </li>
            <li class="hidden-xs hidden-sm">
                <button class="btn btn-primary btn-noborder font-s16 font-w400" data-toggle="modal" data-target="#sign-up-form">Empieza Gratis</button>
            </li>
        </ul>
        <ul class="nav-header pull-left">
            <li class="header-content">
                <a href="{{url('/')}}">
                    <img class="" src="https://static.contapp.com.co/contapp-web/logo.png" alt="contapp sistema pos" height="50">
                </a>
            </li>
        </ul>
    </div>
</header>