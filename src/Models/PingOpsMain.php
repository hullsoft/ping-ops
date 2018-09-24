<?php

namespace HullSoft\Seat\PingOps\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PingOspMain
 * @package HullSoft\Seat\PingOps\Models
 */
class PingOspMain extends Model {

    protected $table = 'hullsoft_ping_ops_main';
    public $timestamps = true;
    
    protected $fillable = [
        'id','date_begin','system', 'message', 'result', 'created_at', 'updated_at'
    ];

}
