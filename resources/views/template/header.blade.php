<header id="header-navbar" class="content-mini content-mini-full">
    <div class="content-boxed row flex-items-xs-between">
        <ul class="nav-header  col-xs ">
            <li class="header-content">
                <a href="{{url('/')}}">
                    <img class="" src="{{ url('assets/img/logo.png') }}" alt="contapp sistema pos" height="50">
                </a>
            </li>

        </ul>
        <ul class="nav-header pull-right">
            <li class="hidden-lg-up">
                <button class="btn btn-link text-white pull-right" data-toggle="class-toggle" data-target=".js-nav-main-header" data-class="nav-main-header-o" type="button">
                    <i class="fa fa-navicon fa-2x"></i>
                </button>
            </li>
        </ul>
        <ul class="col-xs js-nav-main-header nav-main-header push-5-t">
            <li class="text-xs-right hidden-lg-up">
                <button class="btn btn-link text-white" data-toggle="class-toggle" data-target=".js-nav-main-header" data-class="nav-main-header-o" type="button">
                    <i class="fa fa-times"></i>
                </button>
            </li>
            <li>
                <a class="h4 text-center text-white font-w600" href="{{ url('/') }}">Servicios</a>
            </li>
            <li>
                <a class="h4 text-center text-white font-w600" href="{{ url('planes') }}">Casos de exito</a>
            </li>
            <li>
                <a class="h4 text-center text-white font-w600" href="">Nosotros</a>
            </li>
            <li>
                <a class="h4 text-center text-white font-w600" href="#">Contactanos</a>
            </li>
        </ul>

    </div>
</header>
