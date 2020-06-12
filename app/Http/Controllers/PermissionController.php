<?php

namespace App\Http\Controllers;

use App\permission;
use App\Role;
use App\Http\Requests\Permission\StoreRequest;
use App\Http\Requests\Permission\UpdateRequest;

use Illuminate\Http\Request;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('theme.backoffice.pages.permission.index',[
            'permission' => permission::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        return view('theme.backoffice.pages.permission.create',[
         'roles' => Role::all()
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request, permission $permission)
    {
        //logica de almacenamiento store -> lo creamos en el modelo App/permission.php

        $permission = $permission->store($request);
       return redirect() -> route('backoffice.permission.show',$permission);
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function show(permission $permission)
    {
        //
        return view('theme.backoffice.pages.permission.show',[
            'permission' => $permission
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function edit(permission $permission)
    {
        // dd($permission);
        return view('theme.backoffice.pages.permission.edit',[
            'permission' => $permission,
                  'roles' => Role::all()
        ]);

    }
       

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, permission $permission)
    {
        //
        $permission->my_update($request);
        return redirect()->route('backoffice.permission.show',$permission);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function destroy(permission $permission)
    {
        //
        $role =$permission->role;
        $permission->delete();
        toast('Your Permiso as been Deleted!','success');

        return redirect()->route('backoffice.role.show',$role);

    }
}
