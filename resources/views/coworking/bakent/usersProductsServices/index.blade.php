@extends('coworking.layouts.app')

@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="lnr-user icon-gradient bg-warm-flame">
                </i>
                {{--
                <img src="{{Auth::user()->avatar()}}">
                    --}}
                </img>
            </div>
            <div>
                ¡{{Auth::user()->name}}  Bienvenido!
            </div>
        </div>
    </div>
</div>
<div class="p-large">
    <div class="content">
        <div class="desarrollo">
            pantalla de preguntas y respuestas
            @include('coworking.bakent.questions.partials.form')
        </div>
    </div>
</div>
@endsection
