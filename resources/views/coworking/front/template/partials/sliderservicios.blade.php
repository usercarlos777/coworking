<div class="row">
    <div id="ventana_enc" style="color:#00e2cc; background:#13356d; width:100%; font-size:30px; padding:1px; font-weight:bold;margin-top:10px;" >
         Podrás consultar los servicios propuestos por otros usuarios:
    </div>
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
