@extends('coworking.front.template.app')

  @section('content')
<!--Section: Content-->
<section>
    <!-- Jumbotron -->
    <div class="p-3 text-center bg-light shadow-5 rounded mb-5" id="intro">
        <h1 class="mb-3 h2">
            <h3 class="fw-light text-uppercase fs-5 text">{{ Auth::user()->full_name }}</h3>
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
                            <img class="img-fluid" src="https://mdbootstrap.com/img/new/standard/nature/184.jpg"/>
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
                            <img class="img-fluid" src="https://mdbootstrap.com/img/new/standard/nature/184.jpg"/>
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
                            <img class="img-fluid" src="https://mdbootstrap.com/img/new/standard/nature/184.jpg"/>
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
                            <img class="img-fluid" src="https://mdbootstrap.com/img/new/standard/nature/184.jpg"/>
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
        <div class="col-lg-8 col-md-6 mb-4">
            <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img class="img-fluid" src="https://mdbootstrap.com/img/new/standard/nature/184.jpg"/>
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
        </div>
    </div>
</section>
<!--Section: Content-->
@endsection
