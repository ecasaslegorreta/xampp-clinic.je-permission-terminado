@extends('theme.backoffice.layouts.admin')

@section('title','Mostrar Permiso | '. $permission->name)

@section('head')
@endsection


@section('breadcrumbs')
    <li><a href="{{ route('backoffice.role.index')}}">Roles del Sistema</a> </li>
<li><a href="{{ route('backoffice.role.show',$permission->role)}}">Rol: {{ $permission->role->name }}</a></li>
    <li>{{ $permission->name }}</li>
@endsection

@section('content')
    <div class="section">
        <p class="caption"><strong>Permiso: </strong>{{ $permission -> name }} </p>
        <div class="divider"></div>
        <div id="basic-form" class="section">
            <div class="row">
                <div class="col s12 m8 offset-m2">
                    <div class="card">
                        <div class="card-content">
                            <h4 class="card-title">Usuario con el Permiso :<strong> {{$permission -> name }}</strong></h4>
                            <p> <strong>Slug: </strong> {{ $permission->slug }} </p>
                            <p> <strong>Rol:  </strong>{{ $permission->role->name }}</p>
                            <p> <strong>Descripcion: </strong> {{ $permission->description }} </p>
                        </div>
                        
                        
                        <div class="card-action">
                            <a href=" {{ route('backoffice.permission.edit',$permission ) }}">EDITAR</a>
                            <a href="#" style="color:red" onclick="enviar_formulario()">ElIMINAR</a>
                        </div>
                    </div>
                </div>
                <!-- Form with placeholder -->
            </div>
        </div>
    </div>
    
    <form method="POST" action = " {{ route('backoffice.permission.destroy', $permission) }}" name="delete_form">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
    </form>

@endsection

@section('foot') 
    <script>
       function enviar_formulario()
        {

            document.delete_form.submit();
        }
    </script>

@endsection