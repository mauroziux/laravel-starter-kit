@extends('template.master')

@section('meta')

@stop

@section('contenido')
    <main id="main-container ">
        <div class="bg-lineal-gradient-blue div-full">
            <section class="overflow-hidden content-boxed">
                <!-- Section Content -->
                <div class="portada row flex-items-xs-middle">
                    <div class="col-lg-6 col-sm ">
                        <div class="text-xs-center text-md-left">
                            <h1 class="h1 rw-words rw-words-1 typer font-w600 text-white text-uppercase">Laboratorio de
                                <br>

                                <span>Desarrollo web</span>
                                <span>UI/UX design</span>
                                <span>Optimización Web</span>
                                <span>Pruebas de usabilidad</span>
                                <br>
                                enfocado a los usuarios</h1>
                            <h2 class="h4 text-white-op  push-10-t">Integramos servicios de estratégia, planeación,
                                diseño y
                                desarrollo de aplicaciones web, mediante una arquitectura escalable y siempre enfocada a
                                mejorar la experiencia de usuario.</h2>

                        </div>
                    </div>
                    <div class="col-md push-30-t ">
                        <img class="img-responsive animated bounceInRight"
                             src="{{ asset('assets/img/usabilidad-web.png') }}"
                             alt="">
                    </div>
                </div>

                <!-- END Section Content -->
            </section>
        </div>
        <!-- seccion 2 -->
        <div id="section-2" class="row flex-items-xs-middle content content-full bg-white">
            <div class="col-sm-12 text-xs-center">
                <p class="h1 text-uppercase font-w700 push-15-t push">Esto es lo que hacemos bien</p>
            </div>
            <div class="row flex-items-xs-center content-boxed">
                <div class="col-sm-6 col-lg text-xs-center animated fadeInUp">
                    <a class="block block-sombra" href="#">
                        <div class="bg-image "
                             style="background-image: url({{ asset('assets/img/desarrollo-web.jpg') }});">
                            <div class="bg-black-op">
                                <div class="block-content block-content-full text-center">
                                    <h3 class="h3 text-uppercase font-w600 text-white push-50-t push-50">Desarrollo <br>web
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="block-content block-content-full">
                            <div class="row text-center">
                                <div class="col-xs-12">
                                    <div class="h4 text-muted push-5-t">Creamos aplicacion web únicas para cada uno de
                                        nuestros clientes
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg text-xs-center animated fadeInUp">
                    <a class="block block-sombra" href="#">
                        <div class="bg-image"
                             style="background-image: url({{ asset('assets/img/web-design.jpg') }});">
                            <div class="bg-black-op">
                                <div class="block-content block-content-full text-center">
                                    <h3 class="h3 text-uppercase font-w600 text-white push-50-t push-50">UI/UX <br>Design
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="block-content block-content-full">
                            <div class="row text-center">
                                <div class="col-xs-12">
                                    <div class="h4 text-muted push-5-t">Creamos aplicacion web únicas para cada uno de
                                        nuestros clientes
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-lg text-xs-center animated fadeInUp">
                    <a class="block block-sombra" href="#">
                        <div class="bg-image"
                             style="background-image: url({{ asset('assets/img/optimizacion-web.jpg') }});">
                            <div class="bg-black-op">
                                <div class="block-content block-content-full text-center">
                                    <h3 class="h3 font-w600 text-uppercase text-white push-50-t push-50">Optimización
                                        <br>web</h3>
                                </div>
                            </div>
                        </div>
                        <div class="block-content block-content-full">
                            <div class="row text-center">
                                <div class="col-xs-12">
                                    <div class="h4 text-muted push-5-t">Creamos aplicacion web únicas para cada uno de
                                        nuestros clientes
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg text-xs-center animated fadeInUp">
                    <a class="block block-sombra" href="#">
                        <div class="bg-image"
                             style="background-image: url({{ asset('assets/img/pruebas-usabilidad.jpg') }});">
                            <div class="bg-black-op">
                                <div class="block-content block-content-full text-center">
                                    <h3 class="h3 font-w600 text-uppercase text-white push-50-t push-50">Pruebas de <br>
                                        Usabilidad</h3>
                                </div>
                            </div>
                        </div>
                        <div class="block-content block-content-full">
                            <div class="row text-center">
                                <div class="col-xs-12">
                                    <div class="h4 text-muted push-5-t">Creamos aplicacion web únicas para cada uno de
                                        nuestros clientes
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-12 text-xs-center">
                <div class="col-sm">
                    <a href="#" class="btn btn-lg btn-primary">Ver más servicios</a>
                </div>


            </div>
            <!--
            <div class="col-sm-12 flex-sm-bottom text-xs-center">
                <a class="text-primary" href="#section-2">
                    <i class="si si-arrow-down fa-4x"></i>
                </a>
            </div>-->
        </div>
        <div id="section-2" class="row flex-items-xs-middle content content-full bg-primary">
            <div class="col-sm-12 text-xs-center">
                <p class="h1 text-uppercase text-white font-w700 push-15-t push">Como trabajamos</p>
            </div>
            <div class="row flex-items-xs-center content-boxed">
                <div class="col-lg-9 col-md-12 col-xs-10 row flex-items-xs-center text-xs-center content content-full animated fadeInUp  block block-rounded block-sombra-black">
                    <div class="col-sm-3 col-xs-6 content content-full">
                        <img class="img-responsive" src="{{ asset('assets/img/planeacion.svg') }}" alt="">
                        <div class="block-content block-content-full">
                            <h4 class="h4 text-primary">Diseño</h4>
                            <span>lorem ipsum</span>
                        </div>

                    </div>
                    <div class="col-sm-3 col-xs-6 content content-full">
                        <img class="img-responsive" src="{{ asset('assets/img/diseno.svg') }}" alt="">
                        <div class="block-content block-content-full">
                            <h4 class="h4 text-primary">Diseño</h4>
                            <span>lorem ipsum</span>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6 content content-full">
                        <img class="img-responsive" src="{{ asset('assets/img/desarrollo.svg') }}" alt="">
                        <div class="block-content block-content-full">
                            <h4 class="h4 text-primary">Diseño</h4>
                            <span>lorem ipsum</span>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6 content content-full">
                        <img class="img-responsive" src="{{ asset('assets/img/pruebas.svg') }}" alt="">
                        <div class="block-content block-content-full">
                            <h4 class="h4 text-primary">Diseño</h4>
                            <span>lorem ipsum</span>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </main>
@stop
