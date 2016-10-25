@extends('layouts.app')

@section('content')
<article class="col-sm-12">
  <div class="panel panel-default">
    <div class="panel-heading">
      Servicio
    </div>
  <div class="panel-body">

  {!! Form::open([ 'route' =>['servicio.update', $servicio], 'class' => 'form-horizontal', 'method' => 'PUT']) !!}

    <div class="form-group {{ $errors->has('tipo_servicio_id') ? ' has-error' : '' }}">
      {!! Form::label('tipo', 'Tipo de servicio',['class' => 'col-sm-2 col-sm-offset-2 control-label']) !!}
      <div class="col-sm-2">
        {{Form::select('tipo', $tipos,$servicio->tipo_servicio_id,['class' => 'form-control'])}}

        @if ($errors->has('tipo_servicio_id'))
            <span class="help-block">
                <strong>{{ $errors->first('tipo_servicio_id') }}</strong>
            </span>
        @endif
      </div>
    </div>

    <div class="form-group {{ $errors->has('direccion') ? ' has-error' : '' }}">
      {!! Form::label('direccion', 'Direccion',['class' => 'col-sm-4 control-label']) !!}
      <div class="col-sm-6">
          {!! Form::text('direccion', $servicio->direccion, ['class' => 'form-control']) !!}

          @if ($errors->has('direccion'))
              <span class="help-block">
                  <strong>{{ $errors->first('direccion') }}</strong>
              </span>
          @endif
      </div>
    </div>

    <div class="form-group {{ $errors->has('descripcion') ? ' has-error' : '' }}">
      {!! Form::label('descripcion', 'Descripcion',['class' => 'col-sm-4 control-label']) !!}
      <div class="col-sm-6">
          {!! Form::textarea('descripcion', $servicio->descripcion, ['class' => 'form-control', 'rows' => 1]) !!}

          @if ($errors->has('descripcion'))
              <span class="help-block">
                  <strong>{{ $errors->first('descripcion') }}</strong>
              </span>
          @endif
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-6 {{ $errors->has('bomberos') ? ' has-error' : '' }}">
        {!! Form::label('bomberos', 'Bomberos involucrados',['class' => 'col-sm-5 col-sm-offset-3 control-label']) !!}
        <div class="col-sm-2">
          {{Form::select('Bomberos[]', $bomberos,$bomberosparticipantes,['class' => 'selectMultiple', 'multiple'=>'multiple'])}}
          @if ($errors->has('bomberos'))
              <span class="help-block">
                  <strong>{{ $errors->first('bomberos') }}</strong>
              </span>
          @endif
        </div>
      </div>

      <div class="col-sm-6 {{ $errors->has('vehiculos') ? ' has-error' : '' }}">
        {!! Form::label('vehiculos', 'Vehiculos involucrados',['class' => 'col-sm-5 control-label']) !!}
        <div class="col-sm-2">
          {{Form::select('Vehiculos[]', $vehiculos,$vehiculosparticipantes,['class' => 'selectMultiple', 'multiple'=>'multiple', 'id'=>'listavehiculos'])}}
          @if ($errors->has('vehiculos'))
              <span class="help-block">
                  <strong>{{ $errors->first('vehiculos') }}</strong>
              </span>
          @endif
        </div>
      </div>
    </div>

    <div class="form-group accidentados">
      <div class="col-sm-2 col-md-offset-3 {{ $errors->has('ilesos') ? ' has-error' : '' }}">
        {!! Form::label('ilesos', 'Ilesos',['class' => 'col-md-6 col-md-offset-1 col-form-label']) !!}
        <div class="col-md-5">
            {!! Form::text('ilesos',  $servicio->ilesos, ['class' => 'form-control']) !!}

            @if ($errors->has('ilesos'))
                <span class="help-block">
                    <strong>{{ $errors->first('ilesos') }}</strong>
                </span>
            @endif
        </div>
      </div>

      <div class="col-sm-2 {{ $errors->has('lesionados') ? ' has-error' : '' }}">
        {!! Form::label('lesionados', 'Lesionados',['class' => 'col-md-5 col-md-offset-1 col-form-label']) !!}
        <div class="col-md-5">
            {!! Form::text('lesionados',  $servicio->lesionados, ['class' => 'form-control']) !!}

            @if ($errors->has('lesionados'))
                <span class="help-block">
                    <strong>{{ $errors->first('lesionados') }}</strong>
                </span>
            @endif
        </div>
      </div>

      <div class="col-sm-2 {{ $errors->has('quemados') ? ' has-error' : '' }}">
        {!! Form::label('quemados', 'Quemados',['class' => 'col-md-5 col-md-offset-1 col-form-label']) !!}
        <div class="col-md-5">
            {!! Form::text('quemados',  $servicio->quemados, ['class' => 'form-control']) !!}

            @if ($errors->has('quemados'))
                <span class="help-block">
                    <strong>{{ $errors->first('quemados') }}</strong>
                </span>
            @endif
        </div>
      </div>

    </div>

    <div class="form-group accidentados">
      <div class="col-sm-2 col-sm-offset-3 {{ $errors->has('muertos') ? ' has-error' : '' }}">
        {!! Form::label('muertos', 'Muertos',['class' => 'col-md-6 col-md-offset-1 col-form-label']) !!}
        <div class="col-md-5">
            {!! Form::text('muertos',  $servicio->muertos, ['class' => 'form-control']) !!}

            @if ($errors->has('muertos'))
                <span class="help-block">
                    <strong>{{ $errors->first('muertos') }}</strong>
                </span>
            @endif
        </div>
      </div>

      <div class="col-sm-2 {{ $errors->has('otros') ? ' has-error' : '' }}">
        {!! Form::label('otros', 'Otros',['class' => 'col-md-5 col-md-offset-1 col-form-label']) !!}
        <div class="col-md-5">
            {!! Form::text('otros',  $servicio->otros, ['class' => 'form-control']) !!}

            @if ($errors->has('otros'))
                <span class="help-block">
                    <strong>{{ $errors->first('otros') }}</strong>
                </span>
            @endif
        </div>
      </div>

    </div>

    <div class="form-group {{ $errors->has('combustible') ? ' has-error' : '' }}">
      {!! Form::label('combustible', 'Combustible',['class' => 'col-sm-4 control-label']) !!}
      <div class="col-sm-6">
          {!! Form::text('combustible',  $servicio->combustible, ['class' => 'form-control', 'id'=>'combustible', 'idfactor'=> 0.3333]) !!}

          @if ($errors->has('combustible'))
              <span class="help-block">
                  <strong>{{ $errors->first('combustible') }}</strong>
              </span>
          @endif
      </div>
    </div>

    <div class="form-group {{ $errors->has('reconocimiento') ? ' has-error' : '' }}">
      {!! Form::label('reconocimiento', 'Reconocimiento',['class' => 'col-sm-4 control-label']) !!}
      <div class="col-sm-6">
          {!! Form::textarea('reconocimiento',  $servicio->reconocimiento, ['class' => 'form-control' , 'rows' => '8']) !!}

          @if ($errors->has('reconocimiento'))
              <span class="help-block">
                  <strong>{{ $errors->first('reconocimiento') }}</strong>
              </span>
          @endif
      </div>
    </div>

    <div class="form-group {{ $errors->has('disposiciones') ? ' has-error' : '' }}">
      {!! Form::label('disposiciones', 'Disposiciones',['class' => 'col-sm-4 control-label']) !!}
      <div class="col-sm-6">
        {!! Form::textarea('disposiciones',  $servicio->disposiciones, ['class' => 'form-control', 'rows' => '4']) !!}

        @if ($errors->has('disposiciones'))
            <span class="help-block">
                <strong>{{ $errors->first('disposiciones') }}</strong>
            </span>
        @endif
      </div>
    </div>

    <div class="form-group">
      <div class="{{ $errors->has('alarma') ? ' has-error' : '' }}">
        {!! Form::label('alarma', 'Hora alarma',['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-2">
          {!! Form::text('alarma', $servicio->hora_alarma,['class' => 'form-control', 'id'=>'horaAlarma']) !!}

          @if ($errors->has('alarma'))
              <span class="help-block">
                  <strong>{{ $errors->first('alarma') }}</strong>
              </span>
          @endif
        </div>
      </div>

      <div class="{{ $errors->has('salida') ? ' has-error' : '' }}">
        {!! Form::label('salida', 'Hora salida',['class' => 'col-sm-1 control-label']) !!}
        <div class="col-sm-2">
          {!! Form::text('salida', $servicio->hora_salida,['class' => 'form-control']) !!}

          @if ($errors->has('salida'))
              <span class="help-block">
                  <strong>{{ $errors->first('salida') }}</strong>
              </span>
          @endif
        </div>
      </div>

      <div class="{{ $errors->has('regreso') ? ' has-error' : '' }}">
        {!! Form::label('regreso', 'Hora regreso',['class' => 'col-sm-1 control-label']) !!}
        <div class="col-sm-2">
          {!! Form::text('regreso', $servicio->hora_regreso,['class' => 'form-control', 'id'=>'horaSalida']) !!}

          @if ($errors->has('regreso'))
              <span class="help-block">
                  <strong>{{ $errors->first('regreso') }}</strong>
              </span>
          @endif
        </div>
      </div>

    </div>

    <div class="col-sm-6 col-sm-offset-4">
      {{-- {!!Form::submit('Registrar', ['class' => 'btn btn-primary']) !!} --}}
      <button type="submit" class="btn btn-primary">
          <i class="glyphicon glyphicon-ok"></i> Finalizar
      </button>
    </div>

  {!! Form::close() !!}

    </div>
  </div>
</article>

@endsection