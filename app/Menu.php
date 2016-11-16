<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    
        'categoria',
        'fecha',
        'sopa',
        'arroz',
        'carnes',
        'ensalada',
        'principio',
        'jugo',
        'valor_almuerzo',
        'valor_bandeja',
    ];
    /**
     * Get the user that owns the task.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}