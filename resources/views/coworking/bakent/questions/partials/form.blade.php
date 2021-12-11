<div class="row">
    <div class="col-lg-10">
        <fieldset>
            <div class="form-group row {{ $errors->has('question') ? 'has-error' : ''}}">
                {{ Form::label('question', 'Pregunta: ', ['class' => 'col-md-4 form-control-label text-md-right']) }}
                <div class="col-md-7">
                    {{ Form::text('question', null, ['class' => 'form-control ', 'placeholder'=>"Pregunta"]) }}
                    {!! $errors->first('question', '
                    <p class="help-block">
                        :message
                    </p>
                    ') !!}
                </div>
            </div>
            <div class="form-group row {{ $errors->has('answer') ? 'has-error' : ''}}">
                {{ Form::label('answer', 'Respuesta: ', ['class' => 'col-md-4 form-control-label text-md-right']) }}
                <div class="col-md-7">
                    {{ Form::text('answer', null, ['class' => 'form-control ', 'placeholder'=>"Respueta"]) }}
                    {!! $errors->first('answer', '
                    <p class="help-block">
                        :message
                    </p>
                    ') !!}
                </div>
            </div>
             <div class="form-group row{{ $errors->has('order') ? 'has-error' : ''}}">
                {{ Form::label('order', 'Order: ', ['class' => 'col-md-4 form-control-label text-md-right']) }}
                <div class="col-md-7">
                    {{ Form::number('order', null, ['class' => 'form-control ', 'placeholder'=>"Order"]) }}
                    {!! $errors->first('order', '
                    <p class="help-block">
                        :message
                    </p>
                    ') !!}
                </div>
            </div>
        </fieldset>
    </div>
</div>

