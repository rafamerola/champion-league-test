<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teams extends Model
{
    use HasFactory;
    use SoftDeletes;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'image',
        'created_at',
    ];
    
    protected $table = 'teams';
    protected $primaryKey = 'id';

    protected $casts = [
        'id' => 'int',
    ];

    public static $withRelationships = [
    
    ];


    public function players()
    {
        return $this->hasMany('App\Players');
    }

    public function matches()
    {
        return $this->hasMany('App\Matches');
    }
}
