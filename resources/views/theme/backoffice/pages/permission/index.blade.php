@extends('theme.backoffice.layouts.admin')

@section('title','Lista Permisos del sistema')

@section('head')
@endsection

@section('breadcrumbs')
    <li><a href="{{ route('backoffice.permission.create')}}">Crear Permisos </a></li>
    <li>Crear permiso</li>

@endsection

@section('dropdown_settings')
    <li><a href="{{ route('backoffice.permission.create')}}" class="grey-text text-darken-2">Crear Permiso<span class="badge">1</span></a>
    </li>
    <li><a href="#!" class="grey-text text-darken-2">Profile<span class="new badge">2</span></a>
    </li>
    <li><a href="#!" class="grey-text text-darken-2">Notifications</a>
    </li>
@endsection

@section('content')
    <div class="section">
        <p class="caption"><strong>Permisos del sistema </strong> </p>
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
                                      <th>Rol</th>
                                      <th>Acciones</th>
                                  </tr>
                                </thead>
                                <tbody>
                                   @foreach ($permission as $permission)
                                        <tr>
                                            <td><a href="{{ route('backoffice.permission.show',$permission) }}">{{  $permission->name }}</a></td>
                                            <td>{{  $permission->slug}}</td>
                                            <td>{{  $permission->description}}</td>
                                            <td> <a href=" {{ route('backoffice.role.show',$permission->role) }}">{{ $permission->role->name}}</a></td>
                                            <td><a href="{{ route('backoffice.permission.edit',$permission) }}">Editar</a></td>
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