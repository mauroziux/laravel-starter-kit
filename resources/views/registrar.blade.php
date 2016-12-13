@extends('layouts.app')
@section('title')
    Registrar
@endsection
@section('content')
    <!--CARGA -->


    <div id="carga" style="width:100%;height: 100%;background: rgba(0,0,0,0.3);">
        <center><img src="http://www.lifeproject-newjersey.com/images/load2.gif" width="180px" style="margin-top:180px;"/></center>
    </div>
    <section class="section-1">
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