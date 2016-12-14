<footer id="page-footer" class="bg-grey">
    <div class="content-boxed">
        <!-- Footer Navigation -->
        <div class="row padding-30">
            <div class="col-sm-4 text-center">
                <img alt="logo-contapp" src="https://static.contapp.com.co/contapp-web/logo.png" height="57"
                     width="156">
                <div class="font-s14 padding-30 text-justify text-white-op">
                    <p>Somos una novedosa herramienta web que te permite conocer la
                       rentabilidad de tu negocio, administrar múltiples almacenes
                       e inventarios, todo desde la nube, teniendo el control
                       de su negocio.</p>
                </div>
            </div>

            <div class="col-sm-4">
                <h3 class="h4 font-w600 text-white-op text-center text-uppercase push-20">La Empresa</h3>
                <div class="padding-30">
                    <div class="col-md-6">
                        <ul class="list list-simple-mini font-s16">
                            <li>
                                <a class="font-w600" href="{{ url('/') }}">Inicio</a>
                            </li>
                            <li>
                                <a class="font-w600" href="{{ url('caracteristicas') }}">Características</a>
                            </li>
                            <li>
                                <a class="font-w600" href="{{ url('planes') }}">Planes</a>
                            </li>
                            <li>
                                <a class="font-w600" href="{{ url('equipo') }}">Equipo</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="list list-simple-mini font-s16">
                            <li>
                                <a class="font-w600" href="{{ url('blog') }}">Blog</a>
                            </li>
                            <li>
                                <a class="font-w600" href="{{ url('demo') }}">Demo</a>
                            </li>
                            <li>
                                <a class="font-w600" href="https://app.contapp.com.co">Ingreso</a>
                            </li>
                        </ul>
                    </div>
                </diV>
            </div>
            <div class="col-sm-4 text-center">
                <h3 class="h4 font-w600 text-white-op text-center text-uppercase push-20">
                    Siguenos en nuestras redes sociales</h3>
                <a href="#">
                  <span class="item item-circle bg-primary push-15-r">
                  <i class="fa fa-facebook"></i>
                  </span>
                </a>
                <a href="#">
                  <span class="item item-circle bg-city text-white push-15-r">
                  <i class="fa fa-youtube"></i>
                  </span>
                </a>
                <a href="#">
                  <span class="item item-circle bg-info text-white push-15-r">
                  <i class="fa fa-twitter"></i>
                  </span>
                </a>
                <a href="https://plus.google.com/107103225798420891542"
                   rel="publisher"><span class="item item-circle bg-city text-white">
                  <i class="fa fa-google-plus"></i>
                  </span>
                </a>
                <h3 class="h4 font-w600 text-white-op text-center text-uppercase push-20-t push-20">
                    Quienes nos apoyan</h3>
                <img class="img-responsive" height="53" alt="socios contapp" width="301"
                     src="https://static.contapp.com.co/contapp-web/aliados-contapp.png">
            </div>
        
        </div>
        <!-- END Footer Navigation -->
    </div>
    <div class="col-sm-12 bg-green-light">
        <!-- Copyright Info -->
        <div class="font-s20 text-center push-10-t clearfix">
            <p>Creado con <i class="fa fa-heart text-city"></i> en Colombia por <strong style="color: #393838">ZIUXLAB</strong></p>
        </div>
        <!-- END Copyright Info -->
    </div>
    <div id="sign-up-form" class="modal in formulario">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="block">
                    <div class="block-content padding-30  bg-green-light">
                        <h4 class="h1 font-w600 text-center text-white">Tus 30 Días GRATIS</h4>
                        <h4 class="h3 font-w500 text-center text-white">¡Consiguelo Ahora!</h4>
                        <div class="push-20-t">
                            {!! Form::open(['url' => 'foo/bar','class'=>'form-horizontal']) !!}
                            <div class="form-group">
                                <div class="col-md-12">
                                    {!! Form::text('name', null,['class'=>'form-control font-s20 input-lg','placeholder'=>'Ingrese su Nombre']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    {!! Form::email('email', null,['class'=>'form-control font-s20 input-lg',
                                      'placeholder'=>'Ingrese su correo electrónico']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    {!! Form::text('telefono', null,['class'=>'form-control font-s20 input-lg',
                                      'placeholder'=>'Ingrese su número telefónico']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    {!! Form::text('empresa', null,['class'=>'form-control font-s20 input-lg',
                                      'placeholder'=>'Nombre de su empresa']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    {!! Form::text('ciudad', null,['class'=>'form-control font-s20 input-lg',
                                      'placeholder'=>'Ciudad de ubicación']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    {!! Form::submit('Empieza ahora', ['class'=>'btn btn-block btn-green btn-lg font-s20']) !!}
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
