<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Matches extends Model
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
        'house_team_id',
        'guest_team_id',
        'score_house_team',
        'score_guest_team',
        'created_at',
    ];
    
    protected $table = 'matches';
    protected $primaryKey = 'id';
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts = [
        'id' => 'int',
    ];

    public static $withRelationships = [
    
    ];


    public function teamshouse()
    {
        return $this->belongsTo('App\Models\Teams', 'house_team_id', 'id');
    }
    public function teamsguest()
    {
        return $this->belongsTo('App\Models\Teams', 'guest_team_id', 'id');
    }

}
