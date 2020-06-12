@extends('theme.backoffice.layouts.admin')

@section('title','Crear Permiso')

@section('head')
@endsection

@section('breadcrumbs')
    <!--<li><a href="{{ route('backoffice.role.index')}}">Roles del sistema </li>-->
<li>Crear | Nuevo Permiso</li>
@endsection

@section('content')
<div class="section">
    <p class="caption">Introduce los datos para un nuevo Permiso. </p>
    <div class="divider"></div>
    <div id="basic-form" class="section">
        <div class="row">
            <div class="col s12 m12 l6 offset-m2">
                <div class="card-panel">
                    <h4 class="header2">Crear Permiso</h4>
                    <div class="row">
                        <form class="col s12" method="post" action="{{ route('backoffice.permission.store') }}">

                            {{ csrf_field() }}

                            <div class="row">
                                <div class="input-field col s12">
                                        <input id="name" type="text" name="name">
                                        <label for="name">Nombre del permiso</label>
                                        @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong style="color: red">{{ $errors->first('name') }}</strong>
                                        </span>
                                        @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <select name="role_id" id="">
                                        <option value="" disabled="" selected="">Selecciona un rol</option>
                                        @foreach($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->name}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('role_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $errors->first('description') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                    <div class="input-field col s12">
                                        <textarea id="description" class="materialize-textarea" name="description"></textarea>
                                        <label for="message">Descripción del Permiso</label>
                                        @if ($errors->has('description'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong style="color: red">{{ $errors->first('description') }}</strong>
                                        </span>
                                        @endif
                            </div>

                            <div class="row">
                                    <div class="input-field col s12">
                                        <button class="btn waves-effect waves-light right" type="submit"
                                            >Guardar
                                            <i class="material-icons right">send</i>
                                        </button>
                                    </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
            <!-- Form with placeholder -->
        </div>
    </div>
</div>
@endsection

@section('foot')

@endsection