@extends('theme.backoffice.layouts.admin')

@section('title','Usuarios del sistema')

@section('head')
@endsection

@section('breadcrumbs')
    <li><a href="{{ route('user.index') }}">Usuarios del Usuario</a></li>
  

@endsection

@section('dropdown_settings')
<li><a href="{{ route('user.create') }}" class="grey-text text-darken-2">Crear usuario<span class="badge">1</span></a>
</li>
@endsection



@section('content')
    <div class="section">
        <p class="caption"><strong>Usuarios del sistema </strong> </p>
        <div class="divider"></div>
        <div id="basic-form" class="section">
            <div class="row">
                <div class="col s12 ">
                    <div class="card-panel">
                        <!--<h4 class="header2">Rol</h4> -->
                        <div class="row">
                            <table class="striped">
                                <thead>
                                  <tr>
                                      <th>Nombre</th>
                                      <th>Edad</th>
                                      <th>Mail</th>
                                      <th colspan="2">Acciones</th>
                                  </tr>
                                </thead>
                                <tbody>
                                   @foreach ($users as $user)
                                        <tr>
                                            <td><a href="{{ route('user.show',$user) }}">{{ $user->name }}</a></td>
                                            <td>{{ $user->dob }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td><a href="{{ route('user.edit',$user) }}">Editar</a></td>

                                        </tr>
                                   @endforeach
                                </tbody>
                              </table>
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