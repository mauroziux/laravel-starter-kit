@extends('layouts.app')
@section('title')
    Inicio
@endsection
@section('content')

    <!--CARGA -->

    <a name="backup"></a>

    <div id="carga" style="width:100%;height: 100%;background: rgba(0,0,0,0.3);">
        <center><img src="http://www.lifeproject-newjersey.com/images/load2.gif" width="180px" style="margin-top:180px;"/></center>
    </div>

                                                 <!-- Presentacion-->
    <div>
        <div class="logo-a" id="logoo">
            <img src="https://upload.wikimedia.org/wikipedia/commons/a/ab/Logo_TV_2015.png" width="100%">
        </div>
        <div class="presentacion-a">
            <center>
                <h1 class="title-presentacion-a">Bienvenido</h1>
            <b><p class="text-presentacion">Aplicacion web diseñada especialmente para mantener el equilibrio entre <br> una sociedad de ingenieros de software y lograr alcanzar el objetivo</p>
            </b>
                <br><br><br>
                <button style="border: none;padding:5px; font-size:25px;border-radius:5px;background: #e67e22;"><a href="{{ url('/registrarse') }}" style="color:white">Registrarse</a></button>
                <br><br><br>
                <acronym title="Socializa"><i class="fa fa-users fa-4x" aria-hidden="true" style="margin-left: 40px;"></i></acronym>
                <acronym title="Descarga nuestro apk"><i class="fa fa-android fa-4x" aria-hidden="true" style="margin-left: 40px;"></i></acronym>
                <acronym title="Mira nuestros turoriales en YouTube"><i class="fa fa-youtube-play fa-4x" aria-hidden="true" style="margin-left: 40px;"></i></acronym>
                <acronym title="Economico"><i class="fa fa-pie-chart fa-4x" aria-hidden="true" style="margin-left: 40px;"></i></acronym>
            </center>
        </div>
    </div>
                                                 <!-- MISION, VISION, OBJETIVO, ACERCA DE -->
    <section class="section-2">
        <div class="mv">
            <div class="mvb wow fadeInLeft" data-wow-duration="1s">
                <div class="m">
                    <center>
                        <i class="fa fa-calendar-check-o" aria-hidden="true" style="color:#537CFF;font-size: 70px;"></i>
                        <h2 > MISION</h2>
                    </center>

                    <p align="left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A animi cumque deserunt, doloribus earum itaque, laboriosam numquam optio quae quo sunt, veritatis voluptate? Consequuntur exercitationem fugiat magnam minus. Nam, nobis.</p>
                </div>
                <div class="m">
                    <center>
                        <i class="fa fa-eye" aria-hidden="true" style="color:#DA8B24;font-size: 70px;"></i>

                        <h2 > VISION</h2>
                    </center>
                    <p align="left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A animi cumque deserunt, doloribus earum itaque, laboriosam numquam optio quae quo sunt, veritatis voluptate? Consequuntur exercitationem fugiat magnam minus. Nam, nobis.</p>
                </div>
            </div>

            <div class="mvb wow fadeInUp" data-wow-duration="1s">
                <div class="m" style="background:#bdc3c7;margin-top:180px;border-radius:100%;-webkit-box-shadow: 0px 0px 44px -9px rgba(0,0,0,0.75); -moz-box-shadow: 0px 0px 44px -9px rgba(0,0,0,0.75); box-shadow: 0px 0px 44px -9px rgba(0,0,0,0.75);">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/a/ab/Logo_TV_2015.png" width="100%;">
                </div>
            </div>
            <div class="mvb wow fadeInRight" data-wow-duration="1s">
                <div class="m">
                    <center>
                        <i class="fa fa-sticky-note-o" aria-hidden="true" style="color:#E84F4F;font-size: 70px;"></i>
                        <h2 > OBJETIVOS</h2>
                    </center>
                    <p align="right">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A animi cumque deserunt, doloribus earum itaque, laboriosam numquam optio quae quo sunt, veritatis voluptate? Consequuntur exercitationem fugiat magnam minus. Nam, nobis.</p>
                </div>
                <div class="m">
                    <center>
                        <i class="fa fa-tree" aria-hidden="true" style="color:#1AB712;font-size: 70px;"></i>
                        <h2 > VALORES</h2>
                    </center>
                    <p align="right">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A animi cumque deserunt, doloribus earum itaque, laboriosam numquam optio quae quo sunt, veritatis voluptate? Consequuntur exercitationem fugiat magnam minus. Nam, nobis.</p>
                </div>
            </div>
        </div>
    </section>

                                                 <!-- SEGURO, RAPIDO Y SOCIAL -->

    <section class="section-3">
        <div class="cc-a wow bounceInUp" data-wow-duration="1s">
            <center>
                <h3><i class="fa fa-lock fa-3x" aria-hidden="true"></i>
                    <br>
                    Rapido
                </h3>
            </center>
            <hr>
            <p align="justify" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet deserunt dicta dolorem error, ex, expedita ipsum iure laboriosam magni, officia officiis perspiciatis quisquam reiciendis velit veritatis! Dolorem ipsam modi nam!</p>
            <button class="button-b">ver</button>
        </div>
        <div class="cc-a wow bounceInUp" data-wow-duration="1s">
            <center>
                <h3><i class="fa fa-fighter-jet fa-3x" aria-hidden="true"></i>
                <br>
                    Rapido
                </h3>
            </center>
            <hr>
            <p align="justify" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet deserunt dicta dolorem error, ex, expedita ipsum iure laboriosam magni, officia officiis perspiciatis quisquam reiciendis velit veritatis! Dolorem ipsam modi nam!</p>
            <button class="button-b">ver</button>
        </div>
        <div class="cc-a wow bounceInUp" data-wow-duration="1s">
            <center>
                <h3><i class="fa fa-users fa-3x" aria-hidden="true"></i>
                    <br>
                    Rapido
                </h3>
            </center>
            <hr>
            <p align="justify" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet deserunt dicta dolorem error, ex, expedita ipsum iure laboriosam magni, officia officiis perspiciatis quisquam reiciendis velit veritatis! Dolorem ipsam modi nam!</p>
            <button class="button-b">ver</button>
        </div>
    </section>


                                                 <!-- RESUMEN -->
    <section class="section-2">
        <div class="cc-d wow bounceInLeft" data-wow-duration="1s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam dicta dolore ex ipsam libero maiores mollitia necessitatibus pariatur sapiente voluptatem. Animi minima nam pariatur reprehenderit repudiandae sed soluta? Iste, neque!</div>
        <p class="cc-da wow bounceInLeft" data-wow-duration="1s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid asperiores beatae consectetur inventore ipsum minima nihil nobis obcaecati, possimus quaerat saepe tempore, ut. Autem dolore earum provident repellat rerum.</p>
        <hr style="width: 80%;margin-top: -1px; float:left;margin-left: 10%;">
        <br><bR><br><br>
        <div class="imgcc-d wow bounceInUp" data-wow-duration="1s">
            <img src="http://www.ecologiaverde.com/wp-content/2012/01/fotos_de_paisajes_verdes8.jpg" width="100%">
        </div>
    </section>

                                                 <!-- DESCARGAR -->
    <section class="section-3">
        <div class="cc-c wow zoomIn" data-wow-duration="1s">
            <center>
                <img src="http://icons.iconarchive.com/icons/igh0zt/ios7-style-metro-ui/512/MetroUI-Folder-OS-OS-Windows-icon.png" width="40%" >
                <br>
                <p align="center" style="width: 80%;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum eligendi, excepturi expedita in maiores neque reprehenderit sequi similique! Animi deserunt eos facere id minima natus nemo optio quasi sed veritatis!</p>
                <button class="buttoncc-c ">Descargar</button>
            </center>
        </div>
        <div class="cc-c wow zoomIn" data-wow-duration="1s">
            <center><img src="http://www.freeiconspng.com/uploads/linux-icon-5.png" width="40%" >
                <br>
                <p align="center" style="width: 80%;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum eligendi, excepturi expedita in maiores neque reprehenderit sequi similique! Animi deserunt eos facere id minima natus nemo optio quasi sed veritatis!</p>
                <button class="buttoncc-c ">Descargar</button>
            </center>
        </div>
        <div class="cc-c wow zoomIn" data-wow-duration="1s">
            <center><img src="http://www.free-icons-download.net/images/apple-logo-icon-65870.png" width="40%" >
                <br>
                <p align="center" style="width: 80%;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum eligendi, excepturi expedita in maiores neque reprehenderit sequi similique! Animi deserunt eos facere id minima natus nemo optio quasi sed veritatis!</p>
                <button class="buttoncc-c ">Descargar</button>
            </center>
        </div>
    </section>


                                                 <!-- CONTACTO -->
    <section class="section-2">
        <div class="contacto-b">
            <div class="foto-contacto">
                <img src="https://image.freepik.com/iconos-gratis/perfil-macho-sombra-de-usuario_318-40244.jpg" width="100%">
            </div>
            <div class="info-contacto">
                <li><b>Telefonos:</b> 311-254-6988 </li>
                <li><b>Email:</b> contacto@email.com</li>
            </div>
            <div style="width:80%;overflow: hidden;">
                <h4 style="width: 100%;background: #6B9CFF;float:left;padding:15px;text-align: center;"><b>Enviar mensaje</b></h4>
                <input type="text" style="width: 47.5%;" placeholder="Nombre">
                <input type="text" style="width: 47.5%;" placeholder="E-mail">
                <textarea placeholder="Mensaje"></textarea>
                <input type="submit">
            </div>
        </div>
            <img src="https://static.contapp.com.co/contapp-web/mapa-contapp.png" width="38%" style="float: right; margin: 50px 50px 0px 0px;">
        <p style="float: left;margin-left: 60px;"><b>Direccion:</b> Edf. Calle # Armenia - Quindio</p>
    </section>

                                                 <script>
                                                     new WOW().init();
                                                 </script>

@endsection
