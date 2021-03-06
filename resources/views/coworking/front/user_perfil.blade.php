@extends('coworking.front.template.app')

@section('content')
<!--Section: Content-->
<section>
    <!-- Jumbotron -->
    <div class="p-3 text-center bg-light shadow-5 rounded mb-5" id="intro">
        <h1 class="mb-3 h2">
            <h3 class="fw-light text-uppercase fs-5 text">Perfil</h3>
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
                @forelse ( $news as $new )
                <li>
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img class="img-fluid" src="{{ url('img/news_images/'.$new->url_img)  }}" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);">
                                </div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                {{$new->title}}
                            </h5>
                            <p class="card-text">
                                {{$new->abstract}}
                            </p>
                            <a class="btn btn-info" href="{{ url('/News-Mas/'.$new->id) }}">
                                leer mas
                            </a>
                        </div>
                    </div>
                </li>
                @empty
                No hay Noticias...
                @endforelse
            </ul>
        </div>
        <?php $user = Auth::user() ?>
        <div class="col-lg-8 col-md-6 mb-4">
            <form action="{{url('/user-update/'.$user->id)  }}" method="POST" enctype="multipart/form-data">
                   @csrf
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <input type="text" id="name" class="form-control" name="name" />
                            <label class="form-label" for="name">Primer Nombre</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <input type="text" id="name2" class="form-control" name="name2"/>
                            <label class="form-label" for="name2">Segundo Nombre</label>
                        </div>
                    </div>
                </div>

                  <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <input type="text" id="surname" class="form-control" name="surname" />
                            <label class="form-label" for="surname">Primer apellido</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <input type="text" id="surname2" class="form-control" />
                            <label class="form-label" for="surname2">Segundo Apellido</label>
                        </div>
                    </div>
                </div>

                <!-- Text input -->
                <div class="form-outline mb-4">
                    <input type="text" id="profession" class="form-control" name="profession"/>
                    <label class="form-label" for="profession">Profecion</label>
                </div>

                <div class=" mb-4">
                    <label class="form-label" for="avatar">Avatar Usuario</label>
                    <input type="file" class="form-control" id="avatar" name="avatar"/>
                </div>

                 {{-- <div class=" mb-4">
                    <label class="form-label" for="banner">Baner de Usuario</label>
                    <input type="file" class="form-control" id="banner" name="banner" />
                </div> --}}

                <!-- Message input -->
                <div class="form-outline mb-4">
                    <textarea class="form-control" id="general_presentation" rows="4" name="general_presentation"></textarea>
                    <label class="form-label" for="general_presentation">Precentacion</label>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Actualizar Datos De Usuario</button>
            </form>

<!-- Jumbotron -->
    <div class="p-3 text-center bg-light shadow-5 rounded mb-5" id="intro">
        <h1 class="mb-3 h2">
            <h3 class="fw-light text-uppercase fs-5 text">Datos de Perfil</h3>
        </h1>
    </div>
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="{{url('img/users_images/'.$user->avatar)  }}" alt="..." class="img-fluid">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">{{ $user->full_name_add }}</h5>
                    <p class="card-text">
                      {{$user->general_presentation}}
                    </p>
                    <p class="card-text">
                      <small class="text-muted">{{$user->profession}}</small>
                    </p>
                  </div>
                </div>
              </div>
        </div>
    </div>
</section>
<!--Section: Content-->
@endsection
