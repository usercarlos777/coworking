@extends('coworking.front.template.app')

@section('content')
    <section>
        <div id="intro" style="padding:10px 5px 5px 5px;font-size:28px;float: left; text-align:left;color:#00e2cc; background:#13356d; width:100%; font-weight:bold;">
            ¡ OFRECE TUS SERVICIOS, TUS TALENTOS Y HABILIDADES !
        </div>
        <div style="margin-top:10px; padding:10px 5px 5px 5px;font-size:28px;float: left; text-align:center;color:#e6e6e6; background:#0095a0; width:100%; font-weight:bold;">
            COMO FUNCIONA ?
        </div>
    </section>
    <section class="text-center">
        <div class="row">
        <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light" style="padding:10px;">
                    <img src="{{asset('front_page/img/comofunciona02.jpg')}}" class="img-fluid" width="85%" height="85%" />
                    <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <p class="mb-3 h2" style="text-align:justify;font-size:17px;color:#13356d; padding:10px 5px 5px 5px;">
                            La plataforma ofrece un sistema de publicaciones en el que cada persona puede anunciar cualquier bien o servicio, puede ofrecer o publicar lo que necesite.
                            </br>
                            La premisa principal es que no está permitida la compra-venta con dinero real, en su lugar se maneja el llamado truque, lo que permite disponer de lo que necesitamos de un modo más divertido y humano, además podemos ofrecer a quien realmente necesite aquellas cosas que ya nosotros no necesitamos.
                            </br>
                            Esta plataforma de intercambio además permite a personas con pocos recursos la posibilidad de satisfacer una necesidad especifica independientemente de su condición económica y social, ya que todo el mundo puede aportar algo a los demás.
                            </br>
                        </p>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section>
        <div style="margin-top:10px; padding:10px 5px 5px 5px;font-size:28px;float: left; text-align:center;color:#e6e6e6; background:#0095a0; width:100%; font-weight:bold;">
            COMO PUEDO HACERLO ?
        </div>
    </section>
    <section class="text-center">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <p class="mb-3 h2" style="text-align:justify;font-size:17px;color:#13356d; padding:10px 5px 5px 5px;">
                            Sin importar las condiciones de cada persona, todos tenemos algo que podemos hacer en beneficio de otros y además recibir un beneficio por ello.
                            </br></br>
                            Nuestra plataforma te ofrece la posibilidad de satisfacer esas necesidades y ofrecer tus servicios a quienes lo necesitan, ya sea por medio de un intercambio o una donación,  de todas las formas ¡obtienes grandes beneficios!
                            </br></br>
                            Es impresionante la cantidad de personas que hay con talentos y habilidades, que disfrutan, desde hacer compañía a una persona anciana, hacer mandados, reparaciones, pintar una casa, ayudar con una mudanza, dar clases de pintura o de apoyo para estudiantes, sacar a pasear o cuidar a una mascota, etc.
                            </br></br>
                            Ofrece tus servicios profesionales a personas de tu región que puedan necesitarlo ya sea como intercambio por producto u otros servicios que requieras o como una donación que haga de tu comunidad un lugar mejor y más amable para convivir.
                            </br></br>
                            ¡seguro que a alguien le interesa!
                        </p>
                </div>
                <h3 class="mb-3 h1" style="text-align: left;color:#13356d;">¡ Crea tu anuncio Ya !</h1>
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <p class="mb-3 h2" style="text-align:justify;font-size:25px;color:#13356d;"></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light" style="padding:10px;">
                    <img src="{{asset('front_page/img/comopuedohacerlo03.jpg')}}" class="img-fluid" width="85%" height="85%" />
                    <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                </div>
            </div>
            <div class="card" style="margin-top:20px;">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light" style="padding:10px;">
                    <img src="{{asset('front_page/img/comopuedohacerlo04.jpg')}}" class="img-fluid" width="85%" height="100" style="height:200px;" />
                    <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </section>
@endsection
