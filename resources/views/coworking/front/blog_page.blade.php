@extends('coworking.front.template.app')

  @section('content')
<!--Section: Content-->
<section>
    <!-- Jumbotron -->
    <div class="p-3 text-center bg-light shadow-5 rounded mb-5" id="intro">
        <h1 class="mb-3 h2">
            {{ $blog->title  }}
        </h1>
    </div>
    <!-- Jumbotron -->
</section>
<!--Section: Content-->
<!--Section: Content-->
<section class="text-center">
    <div class="row">
        <div class="col-lg-4 col-md-12 mb-4">
            <ul>
                @foreach ($blogs as $item )
                <li>
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img class="img-fluid" src="{{ url('img/blog_images/'.$item->url_img)  }}"/>
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);">
                                </div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $item->title }}
                            </h5>
                            <p class="card-text">
                                {{ $item->abstract }}
                            </p>
                            <a class="btn btn-info" href="{{ url('Blog-Mas/'.$item->id)  }}">
                                leer mas
                            </a>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="col-lg-8 col-md-6 mb-4">
            <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img class="img-fluid" src="{{ url('img/blog_images/'.$blog->url_img)  }}"/>
                    <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);">
                        </div>
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title">
                        {{$blog->title}}
                    </h5>
                    <p class="card-text">
                        {!! $blog->content !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Section: Content-->
@endsection
