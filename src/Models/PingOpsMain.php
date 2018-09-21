<?php

namespace HullSoft\Seat\PingOps\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PingOspMain
 * @package HullSoft\Seat\PingOps\Models
 */
class PingOspMain extends Model
{
    /**
     * @var string
     */
    protected $table = 'hullsoft_ping_ops_main';

    /**
     * @var array
     */
    protected $fillable = [
        'event', 'message',
    ];
}
