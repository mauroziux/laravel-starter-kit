@extends('layouts.app')
@section('title')
    Ingresar
@endsection
@section('content')
    <!--CARGA -->


    <div id="carga" style="width:100%;height: 100%;background: rgba(0,0,0,0.3);">
        <center><img src="http://www.lifeproject-newjersey.com/images/load2.gif" width="180px" style="margin-top:180px;"/></center>
    </div>

    <section style=" background: rgba(179,220,237,1);background: rgba(41,128,185,1);
background: -moz-linear-gradient(top, rgba(41,128,185,1) 0%, rgba(41,128,185,1) 27%, rgba(52,152,219,1) 100%);
background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(41,128,185,1)), color-stop(27%, rgba(41,128,185,1)), color-stop(100%, rgba(52,152,219,1)));
background: -webkit-linear-gradient(top, rgba(41,128,185,1) 0%, rgba(41,128,185,1) 27%, rgba(52,152,219,1) 100%);
background: -o-linear-gradient(top, rgba(41,128,185,1) 0%, rgba(41,128,185,1) 27%, rgba(52,152,219,1) 100%);
background: -ms-linear-gradient(top, rgba(41,128,185,1) 0%, rgba(41,128,185,1) 27%, rgba(52,152,219,1) 100%);
background: linear-gradient(to bottom, rgba(41,128,185,1) 0%, rgba(41,128,185,1) 27%, rgba(52,152,219,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#2980b9', endColorstr='#3498db', GradientType=0 );">
        <div class="ingreso">
            <center>
                <h2 style="color: #ffffff;">Ingresar</h2>
                <hr>
                <input type="text" placeholder="Nick">
                <input type="password" placeholder="Contraseña"><br>
                <input type="submit">
            </center>
        </div>
    </section>