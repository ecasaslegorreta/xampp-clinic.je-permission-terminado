<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class permission extends Model
{
    
     //
     protected $fillable = [
        'name', 'slug', 'description','role_id'
    ];


//RELACIONES
    public function role()
    {
        return $this->belongsTo('App\Role'); // un permiso puede tener un solo rol
    }
    
    public function users()
    {
        return $this->belongsToMany('App\User')->withTimestamps(); // un permiso puede tener muchos usuarios
    }
    
// ALMACENAMIENTO
    public function store($request)
    {
        $slug =str_slug($request->name,'-');
        toast('Your Permiso as been Saved!','success');
        return self::create($request->all() + [
            'slug' => $slug,
        ]);
    }

    public function my_update($request)
    {
        $slug = str_slug($request->name,'-');

        self::update($request->all() + [
            'slug' =>$slug
        ]);
        toast('Your Permiso as been Updated!','success');
    }





//VALIDACION

// RECUPERACION DE INFORMACION

//OTRAS OPERACIOMES
}
