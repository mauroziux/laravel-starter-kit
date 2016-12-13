@extends('layouts.app')
@section('title')
    Registrar
@endsection
@section('content')
    <!--CARGA -->


    <div id="carga" style="width:100%;height: 100%;background: rgba(0,0,0,0.3);">
        <center><img src="http://www.lifeproject-newjersey.com/images/load2.gif" width="180px" style="margin-top:180px;"/></center>
    </div>
    <section style=" background: rgba(179,220,237,1); background: -moz-linear-gradient(left, rgba(179,220,237,1) 0%, rgba(41,184,229,1) 19%, rgba(188,224,238,1) 100%); background: -webkit-gradient(left top, right top, color-stop(0%, rgba(179,220,237,1)), color-stop(19%, rgba(41,184,229,1)), color-stop(100%, rgba(188,224,238,1))); background: -webkit-linear-gradient(left, rgba(179,220,237,1) 0%, rgba(41,184,229,1) 19%, rgba(188,224,238,1) 100%); background: -o-linear-gradient(left, rgba(179,220,237,1) 0%, rgba(41,184,229,1) 19%, rgba(188,224,238,1) 100%); background: -ms-linear-gradient(left, rgba(179,220,237,1) 0%, rgba(41,184,229,1) 19%, rgba(188,224,238,1) 100%); background: linear-gradient(to right, rgba(179,220,237,1) 0%, rgba(41,184,229,1) 19%, rgba(188,224,238,1) 100%); filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b3dced', endColorstr='#bce0ee', GradientType=1 );
    ">
        <div class="registro">
            <center>
                <h2>Resgitrarse</h2>
                <hr>
                <input type="text" placeholder="Nick">
                <input type="text" placeholder="Nombres" style="width:47.5% ;">
                <input type="text" placeholder="Apellidos" style="width:47.5%;">
                <input type="password" placeholder="Contraseña"><br>
                <input type="submit">
            </center>
        </div>
    </section>