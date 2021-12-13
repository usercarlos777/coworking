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
                <li>
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img class="img-fluid" src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);">
                                </div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                Post title
                            </h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up the bulk of the
                                card's content.
                            </p>
                            <a class="btn btn-info" href="#!">
                                leer mas
                            </a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img class="img-fluid" src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);">
                                </div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                Post title
                            </h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up the bulk of the
                                card's content.
                            </p>
                            <a class="btn btn-info" href="#!">
                                leer mas
                            </a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img class="img-fluid" src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);">
                                </div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                Post title
                            </h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up the bulk of the
                                card's content.
                            </p>
                            <a class="btn btn-info" href="#!">
                                leer mas
                            </a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img class="img-fluid" src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);">
                                </div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                Post title
                            </h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up the bulk of the
                                card's content.
                            </p>
                            <a class="btn btn-info" href="#!">
                                leer mas
                            </a>
                        </div>
                    </div>
                </li>
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

                 <div class=" mb-4">
                    <label class="form-label" for="banner">Baner de Usuario</label>
                    <input type="file" class="form-control" id="banner" name="banner" />
                </div>

                <!-- Message input -->
                <div class="form-outline mb-4">
                    <textarea class="form-control" id="general_presentation" rows="4"></textarea>
                    <label class="form-label" for="general_presentation">Precentacion</label>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Actualizar Datos De Usuario</button>
            </form>
        </div>
    </div>
</section>
<!--Section: Content-->
@endsection
