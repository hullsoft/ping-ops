<?php

namespace HullSoft\Seat\PingOps\Helpers;

class Helper {
    static public function CheckDate($pingopsDate){
        $date = new \DateTime($pingopsDate);
        return $date('Y-m-d');
    }
    
}
