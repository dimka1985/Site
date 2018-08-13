<?php

namespace App;

use GeneaLabs\LaravelModelCaching\CachedModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class Socialprovider extends CachedModel
{
    use SoftDeletes;

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
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'provider';
    }

    /**
     * Get the users for the socialprovider.
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
