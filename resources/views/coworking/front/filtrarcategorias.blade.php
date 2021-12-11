@extends('coworking.front.template.appslider')
@section('content')
<div class="row">
    <div id="ventana_enc" style="color:#13356d; background:#00e2cc; width:100%; font-size:20px; padding:1px; font-weight:bold;margin-top:75px;" >
        Bienes
    </div>
    <div class="input-group" style="padding:3px;">
        <input type="text" class="form-control" placeholder="Buscar Información por Bienes"/>
        <span class="input-group-addon">
            <i class="fa fa-search trailing" style="font-size:27px;color:black;background:grey;height:37px;width:40px; border-radius:0 3px 3px 0; padding:3px 3px 2px 2px; cursor:pointer;" align="center"></i>
        </span>
        <button type="button" >Click Me! ssss</button>
    </div>
    <div class="container-xl">
        <div class="row">
            <div id="container_main" class="col-md-12">
                <div id="myCarouselbn" class="carousel slide" data-ride="carousel" data-interval="0">
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarouselbn" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarouselbn" data-slide-to="1"></li>
                        <li data-target="#myCarouselbn" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        @foreach ($bienes->chunk(4) as $coleccion)
                            <div class="item carousel-item {{ $loop->index==0? 'active' : '' }}" >
                               <div class="row" >
                                    @foreach ($coleccion as $bien)
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">
                                                <span class="wish-icon"><i class="fa fa-heart"></i></span>
                                                <div class="img-box">
                                                    <img src="{{asset('img/product_images/'.$bien->url_img)}}" class="img-fluid" alt="" >
                                                </div>
                                                <div class="thumb-content">
                                                    <p style="font-size: 10px;">{{$bien->title}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Carousel controls -->
                    <a class="carousel-control-prev" href="#myCarouselbn" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="carousel-control-next" href="#myCarouselbn" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row" style="margin-top: -210px;">
     <div id="ventana_enc" style="color:#13356d; background:#00e2cc; width:100%; font-size:20px; padding:1px; font-weight:bold;margin-top:2px;" >
          Servicios
     </div>
     <div class="input-group" style="padding:3px;">
          <input type="text" class="form-control" placeholder="Buscar Información por Servicos"/>
          <span class="input-group-addon">
               <i class="fa fa-search trailing" style="font-size:27px;color:black;background:grey;height:37px;width:40px; border-radius:0 3px 3px 0; padding:3px 3px 2px 2px; cursor:pointer;" align="center"></i>
          </span>
     </div>
</div>

<div class="row">
    <div class="container-xl">
        <div class="row">
            <div id="container_main" class="col-md-12">
                <div id="myCarouselbs" class="carousel slide" data-ride="carousel" data-interval="0">
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarouselbs" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarouselbs" data-slide-to="1"></li>
                        <li data-target="#myCarouselbs" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        @foreach ($servicios->chunk(4) as $coleccion)
                            <div class="item carousel-item {{ $loop->index==0? 'active' : '' }}" >
                               <div class="row" >
                                    @foreach ($coleccion as $item)
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">
                                                <span class="wish-icon"><i class="fa fa-heart"></i></span>
                                                <div class="img-box">
                                                    <img src="{{asset('img/product_images/'.$item->url_img)}}" class="img-fluid" alt="" >
                                                </div>
                                                <div class="thumb-content">
                                                    <p style="font-size: 10px;">{{$item->title}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Carousel controls -->
                    <a class="carousel-control-prev" href="#myCarouselbs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="carousel-control-next" href="#myCarouselbs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

