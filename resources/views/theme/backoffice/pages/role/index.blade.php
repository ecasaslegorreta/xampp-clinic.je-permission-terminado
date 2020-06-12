@extends('theme.backoffice.layouts.admin')

@section('title','Lista roles del sistema')

@section('head')
@endsection

@section('breadcrumbs')
    <li><a href="{{ route('backoffice.role.create')}}">Crear Rol</a></li>
    <li>Crear rol</li>

@endsection

@section('dropdown_settings')
<li><a href="{{ route('backoffice.role.create')}}" class="grey-text text-darken-2">Crear Rol<span class="badge">1</span></a>
</li>
<li><a href="#!" class="grey-text text-darken-2">Profile<span class="new badge">2</span></a>
</li>
<li><a href="#!" class="grey-text text-darken-2">Notifications</a>
</li>
@endsection



@section('content')
    <div class="section">
        <p class="caption"><strong>Roles del sistema </strong> </p>
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
                                      <th>Slug</th>
                                      <th>Descripcón</th>
                                      <th>Acciones</th>
                                  </tr>
                                </thead>
                                <tbody>
                                   @foreach ($roles as $role)
                                        <tr>
                                            <td><a href="{{ route('backoffice.role.show',$role) }}">{{  $role->name }}</a></td>
                                            <td>{{  $role->slug}}</td>
                                            <td>{{  $role->description}}</td>
                                        <td><a href="{{ route('backoffice.role.edit',$role) }}">Editar</a></td>
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