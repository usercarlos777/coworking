@extends('coworking.front.template.app')

 @section('content')

<section>
    <div id="intro" style="padding:10px 5px 5px 5px;font-size:28px;float: left; text-align:left;color:#00e2cc; background:#13356d; width:100%; font-weight:bold;">
         ¡ INTERCAMBIA BIENES Y/O PRODUCTOS !
    </div>
    <div style="margin-top:10px; padding:10px 5px 5px 5px;font-size:28px;float: left; text-align:center;color:#e6e6e6; background:#0095a0; width:100%; font-weight:bold;">
        COMO FUNCIONA ?
    </div>
</section>
<section class="text-center" >
    <div class="row">
        <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light" style="padding:10px;">
                <img src="{{asset('front_page/img/comofunciona03.jpg')}}" class="img-fluid" width="85%" height="180px" />
                <a href="#!">
                   <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                 <p class="mb-3 h2" style="text-align:justify;font-size:17px;color:#13356d;padding:10px 5px 5px 5px;height:190px;">
                    La plataforma ofrece un sistema de publicaciones en el que cada persona puede anunciar cualquier bien o servicio, puede ofrecer o publicar lo que necesite.
                    La premisa principal es que no está permitida la compra-venta con dinero real, en su lugar se maneja el llamado truque, lo que permite disponer de lo que necesitamos de un modo más divertido y humano, además podemos ofrecer a quien realmente necesite aquellas cosas que ya nosotros no necesitamos.
                    </br>
                    Esta plataforma de intercambio además permite a personas con pocos recursos la posibilidad de satisfacer una necesidad especifica independientemente de su condición económica y social, ya que todo el mundo puede aportar algo a los demás.
                </p>
              </div>
            </div>
        </div>
    </div>
</section>
<section>
    <!--<div id="intro" class="shadow-none p-2 text-center bg-light rounded mb-2;" style="color:#13356d;background:#00e2cc;margin-top:30px;">
        <a  style="padding:.5em;float: left; text-align:left;color:white; background:#0095a0; width:100%;">
            <h2>COMO PUEDO HACERLO ?</h2>
        </a>
    </div>  -->
    <div style="margin-top:10px; padding:10px 5px 5px 5px;font-size:28px;float: left; text-align:center;color:#e6e6e6; background:#0095a0; width:100%; font-weight:bold;">
        COMO PUEDO HACERLO ?
    </div>
</section>
<section class="text-center">
<div class="row">
    <div class="col-lg-4 col-md-12 mb-4">
        <div class="card">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light" style="padding:10px;">
                <img src="{{asset('front_page/img/comopuedohacerlo02.jpg')}}" class="img-fluid" width="85%" height="85%" />
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
                    ¡Puedes darle una nueva vida a todas esas cosas que tienes en casa en excelente estado y que ya no usas, alguien más podría necesitarlas!
                    </br></br>
                    Todos acumulamos cosas que ya no necesitamos, ya sea porque adquirimos cosas nuevas o porque simplemente ya no las usamos.

                </p>
            </div>
            <h3 class="mb-3 h2" style="text-align:left;color:#13356d;background:#00e2cc;"> Cuantas cosas guardamos por si acaso ?</h3>
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <p class="mb-3 h2" style="text-align:justify;font-size:17px;color:#13356d; padding:10px 5px 5px 5px;">
                    ¡Podemos darles nueva vida a esas cosas y ofrecerlas de manera voluntaria a una persona que lo necesite o plantear un intercambio por alguna otra cosa que te sea de mayor utilidad! Alguien está buscando lo que tú tienes
                    un sofá, una lámpara, una bici, un teléfono móvil, un juego de mesa, electrodomésticos... seguro que tienes algo de lo que deshacerte.
                   <br>
                </p>
                <p class="mb-3 h2" style="text-align:justify;font-size:17px;color:#0f6482;  padding:10px 5px 5px 5px;">
                    1.	Hazle una foto <br>
                    2.	Súbela a la plataforma <br>
                    3.	Pide opciones de lo que requieras a otra persona O aclara si es una donación
                    <br><br>
                </p>
            </div>
            <h3 class="mb-3 h1" style="text-align: left;color:#13356d; padding:10px 5px 5px 5px;">¡ Crea tu anuncio Ya !</h1>
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <p class="mb-3 h2" style="text-align:justify;font-size:25px;color:#13356d;">
                </p>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
