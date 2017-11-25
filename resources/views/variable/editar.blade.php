@extends('layouts.app')

@section('content')
  <article class="col-sm-12">
    <div class="panel panel-default">
      <div id="breadcrumb" class="panel-heading">
        <span class="fa fa-edit" aria-hidden="true"></span>
        <h4>Editar variables</h4>
      </div>
      <div class="panel-body">
        <form class="form-horizontal" action="{{ route('variable.update', $variables) }}" method="POST">
          {{csrf_field()}}
          {{method_field('PUT')}}
          <div class="form-group  {{ $errors->has('asistencia') ? ' has-error' : '' }}">
            <label for="asistencia" class="col-md-4 control-label">Asistencia: </label>
            <div class="col-md-2">
              <input type="number" class="form-control" min="0" name="asistencia"  @if(old('asistencia')) value="{{old('asistencia')}}" @endif value="{{$variables->asistencia}}">
                @if ($errors->has('asistencia'))
                  <span class="help-block">
                    <strong>{{ $errors->first('asistencia') }}</strong>
                  </span>
                @endif
              </div>
            </div>
            <div class="form-group  {{ $errors->has('accidentales') ? ' has-error' : '' }}">
              <label for="accidentales" class="col-md-4 control-label">Accidentales: </label>
              <div class="col-md-2">
                <input type="number" class="form-control" min="0" name="accidentales"  @if(old('accidentales')) value="{{old('accidentales')}}" @endif value="{{$variables->accidentales}}">
                  @if ($errors->has('accidentales'))
                    <span class="help-block">
                      <strong>{{ $errors->first('accidentales') }}</strong>
                    </span>
                  @endif
                </div>
              </div>
              <div class="form-group  {{ $errors->has('guardias') ? ' has-error' : '' }}">
                <label for="guardias" class="col-md-4 control-label">Guardias: </label>
                <div class="col-md-2">
                  <input type="number" class="form-control" min="0" name="guardias"  @if(old('guardias')) value="{{old('guardias')}}" @endif value="{{$variables->guardias}}">
                    @if ($errors->has('guardias'))
                      <span class="help-block">
                        <strong>{{ $errors->first('guardias') }}</strong>
                      </span>
                    @endif
                  </div>
                </div>
                <div class="form-group  {{ $errors->has('anio') ? ' has-error' : '' }}">
                  <label for="anio" class="col-md-4 control-label">Año:</label>
                  <div class="col-md-2">
                    <input type="number" class="form-control" min="0" name="anio"  @if(old('anio')) value="{{old('anio')}}" @endif value="{{$variables->anio}}" disabled>
                      @if ($errors->has('anio'))
                        <span class="help-block">
                          <strong>{{ $errors->first('anio') }}</strong>
                        </span>
                      @endif
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                      <button type="submit" class="btn btn-primary">
                        <i class=" glyphicon glyphicon-wrench"></i> Editar
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </article>
        @endsection
