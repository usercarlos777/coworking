@extends('coworking.front.template.app')

@section('content')

<!--Section: Content-->

<section>
    <!-- Jumbotron -->
    <div id="intro" class="p-5 text-center bg-light shadow-5 rounded mb-5">
        <h1 class="mb-3 h2">Nuestros Blog .. </h1>
    </div>
    <!-- Jumbotron -->
</section>
<!--Section: Content-->

<!--Section: Content-->
<section class="text-center">
    <div class="row">
         @forelse($blogs as $blog)
        <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img src="{{ url('img/blog_images/'.$blog->url_img)  }}" class="img-fluid" />
                    <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{$blog->title  }}</h5>
                    <p class="card-text">
                       {{$blog->abstract  }}
                    </p>
                    <a href="{{ url('Blog-Mas/'.$blog->id) }}" class="btn btn-info">leer mas</a>
                </div>
            </div>
        </div>
        @if ($loop->iteration % 3 == 0)
            </div>
            <div class="row">
        @endif
        @empty
        No hay blogs..
    @endforelse
    </div>
</section>
<!--Section: Content-->
@endsection
