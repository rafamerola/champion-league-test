<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Players extends Model
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
        'description',
        'number',
        'team_id',
        'created_at',
    ];
    
    protected $table = 'players';
    protected $primaryKey = 'id';

    protected $casts = [
        'id' => 'int',
    ];

    public static $withRelationships = [
    
    ];


    public function team()
    {
        return $this->hasOne('App\Team');
    }

}
