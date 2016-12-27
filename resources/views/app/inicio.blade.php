@extends('template.master')

@section('meta')

@stop

@section('contenido')
    <main id="main-container ">
        <div class="bg-lineal-gradient-blue div-full">
            <section class="overflow-hidden content-boxed">
                <!-- Section Content -->
                <div class="portada row">
                    <div class="col-lg-6 col-sm flex-sm-middle">
                        <div class="text-xs-center text-md-left">
                            <h1 class="h1 typer font-s48 font-w600 text-white text-uppercase">Laboratorio de <br>
                                <span class="element">Desarrollo web</span><br>
                                enfocado a los usuarios</h1>
                            <h2 class="h4 text-white-op  push-10-t">Integramos servicios de estratégia, planeación,
                                diseño y
                                desarrollo de aplicaciones web, mediante una arquitectura escalable y siempre enfocada a
                                mejorar la experiencia de usuario.</h2>

                        </div>
                    </div>
                    <div class="col-md flex-sm-bottom">
                        <img class="img-responsive"
                             src="https://cdn.mxpnl.com/cache/717dea6a4c9c1b162d0de3ac7250158d/images/static/landing/marketing/segmentation2/segmentation-hero@2x.png"
                             alt="">
                    </div>
                    <div class="col-sm-12 text-xs-center flex-xs-bottom">
                        <a class="text-white" href="#section-2">
                            <i class="si si-arrow-down fa-4x"></i>
                        </a>
                    </div>
                </div>

                <!-- END Section Content -->
            </section>
        </div>
        <div id="section-2" class="row content content-full div-full bg-white">
            <div class="col-sm-12 text-xs-center">
                <p class="h2 text-uppercase font-w600">Esto es lo que hacemos bien</p>
            </div>
            <div class="row col-sm-12 ">
                <div class="col-sm text-xs-center">
                    <h3>Optimizacion web</h3>
                    <p></p>
                </div>
                <div class="col-sm text-xs-center">
                    <h3>Optimizacion web</h3>
                    <p></p>
                </div>
                <div class="col-sm text-xs-center">
                    <h3>Optimizacion web</h3>
                    <p></p>
                </div>
                <div class="col-sm text-xs-center">
                    <h3>Optimizacion web</h3>
                    <p></p>
                </div>
            </div>
            <div class="col-sm-12 flex-sm-bottom text-xs-center">
                <a class="text-primary" href="#section-2">
                    <i class="si si-arrow-down fa-4x"></i>
                </a>
            </div>
        </div>
    </main>
@stop
