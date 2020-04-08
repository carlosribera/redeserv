<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = "menu";
    protected $fillable = ['nombre', 'url', 'icono'];
    protected $guarded = ['id'];

    public function roles()
    {
        return $this->belongsToMany(Rol::class, 'menu_rol');
    }
}
