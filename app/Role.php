<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    //
    protected $fillable = [
        'name', 'description','slug'
    ];


//RELACIONES
    public function permissions()
    {
        return $this->hasMany('App\Permission');//un rol puede tener a muchos Permisos
    }
    
    public function users()
    {
        return $this->belongsToMany('App\User')->withTimestamps(); //Un rol  puede tener muchos usuarios
    }
    


// ALMACENAMIENTO
    public function store($request)
    {
        $slug = str_slug($request->name,'-');
                toast('Your Rol as been Stored!','success');
  
        return self::create($request->all() + [
            'slug' => $slug,
        ]);
    }

    public function my_update($request)
    {
        $slug = str_slug($request->name,'-');
        self::update($request->all() + [
            'slug' => $slug
        ]);

    }
    
    



//VALIDACION

// RECUPERACION DE INFORMACION

//OTRAS OPERACIOMES

}

