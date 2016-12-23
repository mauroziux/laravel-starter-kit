@extends('template.master')

@section('meta')

@stop

@section('contenido')
    <main id="main-container ">
        <div class="bg-lineal-gradient-blue div-full">
            <section class="overflow-hidden">
                <!-- Section Content -->
                <div class="portada row">
                    <div class="col-sm-5 flex-xs-middle">
                        <div class="">
                            <h1 class="h1 typer font-s48 font-w600 text-white text-uppercase">Que tan <span
                                        class="element">Usable</span><br>
                                es tu web</h1>
                            <h2 class="h4 text-white-op  push-10-t">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                                "</h2>
                            <div class="text-xs-center push-15-t">
                                <button data-toggle="modal" data-target="#sign-up-form"
                                        class="btn btn-primary animated font-s26 bounceIn  btn-lg">
                                    ver video
                                </button>
                            </div>

                        </div>
                    </div>

                    <div class="col-sm flex-xs-middle">
                        <img class="img-responsive"
                             src="https://cdn.mxpnl.com/cache/717dea6a4c9c1b162d0de3ac7250158d/images/static/landing/marketing/segmentation2/segmentation-hero@2x.png"
                             alt="">
                    </div>
                    <div class="col-sm-12 text-xs-center">
                        <a class="text-white" href="#section-2">
                            <i class="si si-arrow-down fa-4x"></i>
                        </a>
                    </div>
                </div>

                <!-- END Section Content -->
            </section>
        </div>
        <div id="section-2" class="div-full bg-white">
            <div class="content content-full overflow-hidden">
                <div class="col-sm-12 text-xs-center flex-xs-middle">
                    <a class="text-primary" href="#section-2">
                        <i class="si si-arrow-down fa-4x"></i>
                    </a>
                </div>
            </div>
        </div>
    </main>
@stop
