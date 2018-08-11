<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Socialprovider extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'provider',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        //
    ];

    /**
     * Get the users for the socialprovider.
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
