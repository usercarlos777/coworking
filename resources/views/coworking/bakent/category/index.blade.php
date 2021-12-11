@extends('coworking.layouts.app')

@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
<<<<<<< HEAD
                <i class="lnr-tag icon-gradient bg-warm-flame">
                </i>
            </div>
            <div>
                Categorias
            </div>
        </div>
        <div class="ibox-tools" style="margin-left: auto;">
            <a href="{{ url('admin/categorias/create') }}">
                <button class="btn btn-primary btn-xs" type="button">
                    <i class="fa fa-plus-circle">
                    </i>
                    Nuevo
                </button>
            </a>
        </div>
=======
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
>>>>>>> solucion Multi aAuth en coworkin  con roles admin|socio|invitado
    </div>
</div>
<div class="p-large">
    <div class="content">
        <div class="desarrollo">
<<<<<<< HEAD
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover dataTables-example">
                    <thead>
                        <tr>
                            <th>
                                ID
                            </th>
                            <th>
                                Nombre
                            </th>
                            <th>
                                Tipo
                            </th>
                            <th>
                                Imagen
                            </th>
                            <th>
                                Estado
                            </th>
                            <th>
                                Opciones
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $item)
                        <tr class="gradeX">
                            <td>
                                 {{@$item->id}}
                            </td>
                            <td>
                                {{  @$item->name }}
                            </td>
                             <td>
                                {{  @$item->type }}
                            </td>
                             <td>
                                {{  @$item->type }}
                            </td>
                             <td>
                                {{  @$item->status }}
                            </td>
                            <td>
                                <a href="{{ url('admin/categorias/' . @$item->id . '/edit') }}">
                                    <button class="btn btn-primary btn-xs" type="submit">
                                        Actualizar
                                    </button>
                                </a>
                                /
                                {!! Form::open([
                                    'method' => 'DELETE',
                                    'url' => ['admin/categorias', @$item->id],
                                    'style' => 'display:inline',
                                    'onsubmit' => 'return confirm("Confirma que desea eliminar la categoria")',
                                ]) !!}
                                {!! Form::submit('Borrar', ['class' => 'btn btn-danger btn-xs']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @empty
                        <p>
                            No hay Categorias
                        </p>
                        @endforelse
                    </tbody>
                </table>
            </div>
=======
            pantalla de preguntas y respuestas
            @include('coworking.bakent.questions.partials.form')
>>>>>>> solucion Multi aAuth en coworkin  con roles admin|socio|invitado
        </div>
    </div>
</div>
@endsection
<<<<<<< HEAD

=======
>>>>>>> solucion Multi aAuth en coworkin  con roles admin|socio|invitado
