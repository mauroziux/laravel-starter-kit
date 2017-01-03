@extends('template.master')

@section('meta')

@stop

@section('contenido')
    <main id="main-container ">
        <div class="bg-lineal-gradient-blue div-full">
            <section class="overflow-hidden content-boxed">
                <!-- Section Content -->
                <div class="portada row flex-items-xs-middle content-boxed">
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
                                    <h4 class="h5 text-muted push-5-t">
                                        Creamos aplicaciones web únicas para cada uno de
                                        nuestros clientes, desarrollo completo de apps , APIs, y web apps centradas en
                                        el usuario final para mejorar su experiencia.
                                    </h4>
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
                                    <h4 class="h5 text-muted push-5-t">
                                        Creamos productos que resuelvan necesidades concretas de sus usuarios,
                                        consiguiendo la mayor satisfacción y mejor experiencia de uso posible
                                        con el mínimo esfuerzo.
                                    </h4>
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
                                    <h4 class="h5 text-muted push-5-t ">
                                        Optimización de paginas web y su contenido, mejora de velocidad de carga en
                                        navegadores, cache, optimización para dispositivos moviles, service-workers,
                                        SEO.
                                    </h4>
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
                                    <h4 class="h5 text-muted push-5-t">
                                        Realizamos pruebas de usabilidad biometricas (eye tracker), mapas de calor, y
                                        analisis conductivo con usuarios reales, promoviendo la usabilidad de las
                                        interfaces.
                                    </h4>
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
                <div class="col-lg-9 col-md-12 col-xs-10 row flex-items-xs-center text-xs-center content content-full animated fadeInUp  block block-rounded block-sombra">
                    <div class="col-sm-3 col-xs-6 content content-full">
                        <img class="img-responsive" src="{{ asset('assets/img/planeacion.svg') }}" alt="">
                        <div class="push-15-t">
                            <h4 class="h4 text-primary">Planeación</h4>
                            <span>Cada gran producto comienza con una gran estrategia y metas claras.</span>
                        </div>

                    </div>
                    <div class="col-sm-3 col-xs-6 content content-full">
                        <img class="img-responsive" src="{{ asset('assets/img/diseno.svg') }}" alt="">
                        <div class="push-15-t">
                            <h4 class="h4 text-primary">Diseño</h4>
                            <span>se plasman las ideas en diseños pensados para los usuarios </span>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6 content content-full">
                        <img class="img-responsive" src="{{ asset('assets/img/desarrollo.svg') }}" alt="">
                        <div class="push-15-t">
                            <h4 class="h4 text-primary">Desarrollo</h4>
                            <span>Codigo limpio, documentado, mantenible y escalable</span>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6 content content-full">
                        <img class="img-responsive" src="{{ asset('assets/img/pruebas.svg') }}" alt="">
                        <div class="push-15-t">
                            <h4 class="h4 text-primary">Testeo</h4>
                            <span>pruebas de usabilidad, unitarias y de velocidad, entre muchas más</span>
                        </div>
                    </div>
                </div>

            </div>


        </div>
        <div id="section-3" class="row flex-items-xs-middle content content-full bg-white">
            <div class="row flex-items-xs-center content-boxed">

            </div>
        </div>
        <div id="section-4" class="row flex-items-xs-middle content content-full bg-primary">
            <div class="row flex-items-xs-middle content-boxed">
                <div class="col-sm text-white">
                    <div class="h1">¿Listo para innovar?</div>
                    <p class="h4">Cuentenos acerca de sus nuevos desafíos, nosotros nos encargaremos de ayudarle, rellene el
                        siguiente formulario para que podamos empezar!</p>
                </div>
                <div class="col-md-8 col-lg-6">
                    <div class="block block-sombra contact-form block-rounded">
                        <div class="block-header bg-gray-lighter">
                            <h3 class="block-title">Nueva solicitud de proyecto</h3>
                        </div>
                        <div class="block-content">
                            {!! Form::open() !!}
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label for="contact1-firstname">Firstname</label>
                                        <input class="form-control" type="text" id="contact1-firstname" name="contact1-firstname" placeholder="Enter your firstname..">
                                    </div>
                                    <div class="col-xs-6">
                                        <label for="contact1-lastname">Lastname</label>
                                        <input class="form-control" type="text" id="contact1-lastname" name="contact1-lastname" placeholder="Enter your lastname..">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-12" for="contact1-email">Email</label>
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <input class="form-control" type="email" id="contact1-email" name="contact1-email" placeholder="Enter your email..">
                                            <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-12" for="contact1-subject">Where?</label>
                                    <div class="col-xs-12">
                                        <select class="form-control" id="contact1-subject" name="contact1-subject" size="1">
                                            <option value="1">Support</option>
                                            <option value="2">Billing</option>
                                            <option value="3">Management</option>
                                            <option value="4">Feature Request</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-12" for="contact1-msg">Message</label>
                                    <div class="col-xs-12">
                                        <textarea class="form-control" id="contact1-msg" name="contact1-msg" rows="7" placeholder="Enter your message.."></textarea>
                                        <div class="help-block">Feel free to use common tags: &lt;blockquote&gt;, &lt;strong&gt;, &lt;em&gt;</div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <button class="btn btn-sm btn-info" type="submit"><i class="fa fa-send push-5-r"></i> Send Message</button>
                                    </div>
                                </div>
                           {!! Form::close() !!}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
@stop
