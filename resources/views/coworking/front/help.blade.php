@extends('coworking.front.template.app')

@section('content')

<!--Section: Content-->

<section>
    <!-- Jumbotron -->
    <div id="intro" class="p-5 text-center bg-light shadow-5 rounded mb-5">
        <h1 class="mb-3 h2">Preguntas Frecuentes</h1>
        <p class="mb-3"> Respondemos las preguntas de nuestros usuarios y el compromiso de nuestro servicio</p>
    </div>
    <!-- Jumbotron -->
</section>
<!--Section: Content-->

<!--Section: Content-->
<section class="text-start">

    <div class="row">

        @forelse($questions as $question)
        <div class="col-lg-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p>
                            {{ $question->question }}
                        </p>
                        <footer class="blockquote-footer">
                            {{$question->answer  }}
                        </footer>
                    </blockquote>
                </div>
            </div>
        </div>
        @if ($loop->iteration % 2 == 0)
    </div>
    <div class="row">
        @endif
        @empty
        No hay preguntas ..
        @endforelse
    </div>
</section>
<!--Section: Content-->
@endsection
