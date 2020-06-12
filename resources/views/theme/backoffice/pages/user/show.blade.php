@extends('theme.backoffice.layouts.admin')

@section('title', $user->name)

@section('head')
@endsection


@section('breadcrumbs')
    <li><a href="{{ route('user.index')}}">Usuario del sistema</a></li>
<li>{{ $user->name }}</li>
@endsection

@section('content')
    <div class="section">
        <p class="caption"><strong>Usuario: </strong>{{ $user -> name }} </p>
        <div class="divider"></div>
            <div id="basic-form" class="section">
                <div class="row">
                    <div class="col s12 m8">
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title"></span>
                            </div>
                            <div class="card-action">
                                <a href="{{ route('user.edit',$user) }}">Editar</a>
                                <a href="" style="color: red" onclick="enviar_formulario()">Eliminar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title"></span>
                            </div>
                            <div class="card-action">
                                <a href="{{ route('user.edit',$user) }}">Editar</a>
                                <a href="" style="color: red" onclick="enviar_formulario()">Eliminar</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <form method="POST" action = " {{ route('backoffice.role.destroy', $user) }}" name="delete_form">
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