
<ul class="topnav" id="myTopnav">
    <h2 style="float: left;margin-top:15px;margin-left:13px;color:white;font-size: 23px;">
        <i class="fa fa-pencil-square" aria-hidden="true"></i>
        <a href="{{ url('/') }}" style="color: #ffffff;"> Aplicacion</a>
    </h2>
    <li><button class="button-a"><a href="{{ url('/ayuda') }}" style="color:white;">Ayuda</a></button></li>
    <li><button class="button-a"><a href="{{ url('/acercade') }}" style="color:white;">Acerca de </a></button></li>
    <li><button class="button-a"><a href="{{ url('/registrarse') }}" style="color:white;">Registrarse</a></button></li>
    <li><button class="ingresar-nav" style="color:white;"><a href="{{ url('/ingresar') }}" >Ingresar </a></button></li>
    <li class="icon">
        <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
    </li>
</ul>