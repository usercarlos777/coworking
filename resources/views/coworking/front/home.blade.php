@extends('coworking.front.template.app')

@section('content')
<section style="background:white;">
   <div class="row">
      <section>
        <div id="intro" style="padding:10px 5px 5px 5px;font-size:28px;float: left; text-align:center;color:white; background:#0095a0; width:100%; font-weight:bold;">
            RED DE INTERCAMBIO SOLIDARIO
        </div>
        <div class="row">
            <div class="bg-image hover-overlay ripple col-md-3" data-mdb-ripple-color="light" style="float:right;">
                <div class="card">
                <img src="{{asset('front_page/img/Comofunciona04.jpg')}}"  width="350px" height="200px" align="right" align="center" style="position:relative;padding:10px 5px 5px 5px;border-radius:10px 10px 10px 10px;"/>
                <a href="#!">
                   <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <p class="mb-3 h2" style="text-align:justify;font-size:17px;color:#13356d; padding:10px 5px 5px 5px;">
                           “Aquí puedes encontrar una plataforma muy divertida en la que puedes intercambiar bienes y servicios sin dinero, ¡queremos construir contigo una sociedad colaborativa más unida y más humana!
                            Cada uno de nosotros puede aportar algo de un modo único e irrepetible y ofrecer aquello que tenemos, sabemos o nos gusta hacer a quien lo necesite, te invitamos a unirte a esta magnífica experiencia que nos permite acercarnos y apostarle a una sociedad más solidaria que nos permita trabajar juntos por el bienestar común.
                            Te invitamos a conocer nuestro propósito y nuestro sistema de intercambio solidario “truque”, que permite a todos los miembros de nuestra comunidad servir a otras personas en su comunidad y de esta manera generar un intercambio solidario en que todos ganen.”
                        </p>
                    </div>
                </div>
            </div>

          </div>
      </section>
      <section>
        <div id="intro" style="padding:10px 5px 5px 5px;font-size:28px;float: left; text-align:center;color:white; background:#0095a0; width:100%; font-weight:bold;margin-top:15px;">
            QUE ES ?
        </div>
      </section>
      <div class="row">
        <div class="col-md-9">
          <div class="card">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
               <p class="mb-3 h2" style="text-align:justify;font-size:17px;color:#13356d;padding:10px 5px 5px 5px;height:180px;">
                Es una plataforma donde los usuarios pueden intercambiar bienes y servicios entre sí, pero no se maneja o acepta dinero real, en este caso manejaremos el truque.

                La plataforma permite lograr una comunidad más sensible, más humana y más colaborativa ya que de esta manera nos podemos ayudar entre todos ofreciendo lo que tenemos y que no le damos uso (en el caso de bienes) y algo de lo cual tenemos conocimientos (en el caso de servicios) y lo podemos ofrecer a quien lo necesite.
              </p>
            </div>
          </div>
        </div>
        <div class="bg-image hover-overlay ripple col-md-3" data-mdb-ripple-color="light" style="float:right;">
          <img src="{{asset('front_page/img/quees01.png')}}"  width="200px" height="200px" align="right"  style="border-radius:10px; position:relative;"/>
          <a href="#!">
             <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
      </div>
    </div>
</section>
<section>
    <div class="row" style="margin-top:-7%;">
        <section>
            <div id="intro" style="padding:10px 5px 5px 5px;font-size:28px;float: left; text-align:center;color:white; background:#0095a0; width:100%; font-weight:bold;">
                COMO FUNCIONA ?
            </div>
        </section>
   </div>
</section>
<section class="text-center">
    <div class="row" >
        <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light" style="padding:5px;">
                <img src="{{asset('front_page/img/Comofunciona03.jpg')}}" class="img-fluid" width="100%" style="height:185px;" />
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
                    La plataforma cuenta con una técnica de publicaciones en las que cada socio anunciará el bien o servicios que está ofertando o que está necesitando y se podrá acceder a la compra o venta de éste por medio de trueque( cambio de otro bien o servicio.)
                    Las ofertas pueden realizarse cualquier día en la pestaña que encontrarán como OFERTAS, estas serán previamente revisadas por el departamento de Coworking con el fin de que los bienes o servicios ofertados no afectan o vayan en contra del bienestar de la comunidad, después de esta revisión se habilitará la oferta para la comunidad.
                    Es de resaltar que no está permitida la compra o venta con dinero real, para ello será utilizado el truque.
                 </p>
              </div>
            </div>
        </div>
    </div>

    @include('coworking.front.template.partials.sliderservicios')

    <div class="row" style="margin-top:-18%;">
        <section>
            <div id="intro" style="padding:10px 5px 5px 5px;font-size:28px;float: left; text-align:center;color:white; background:#0095a0; width:100%; font-weight:bold;margin-top:20px;">
                <a href="#!" style="color:white;">  NOTICIAS </a>
            </div>
        </section>
        <div class="bg-image hover-overlay ripple col-md-4" data-mdb-ripple-color="light" style="float:right;">
            <img src="{{asset('front_page/img/noticias01.png')}}"  width="350px" height="200px" align="center" style="padding:10px 5px 5px 5px;" />
            <a href="#!">
               <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
         </div>
        <div class="col-md-8">
            <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <p class="mb-3 h2" style="text-align:justify;font-size:17px;color:#13356d; padding:10px 5px 5px 5px;height:180px;">
                        En esta sección podemos encontrar información de interés general, relacionada con la plataforma de intercambio solidario, es decir que trate temas de consumo responsable, reciclaje y conciencia de consumo, así mismo se podrán encontrar noticias relacionadas con eventos y logros importantes de los miembros de la comunidad, turismo, salud, empresas, emprendimiento, entre otras, con enfoque solidario
                    </p>
                </div>
            </div>
        </div>
        @include('coworking.front.template.partials.sliderbienes')
    </div>
</section>
@endsection
