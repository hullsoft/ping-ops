<?php

namespace HullSoft\Seat\PingOps\Http\Controllers;

use Seat\Web\Http\Controllers\Controller;
use HullSoft\Seat\PingOps\Models\PingOspMain;

/**
 * Class HomeController
 * @package Author\Seat\YourPackage\Http\Controllers
 */
class HomeController extends Controller {

    
    public function getHome() {
        $structure = [];
        $structure = PingOspMain::all();

        return view('pingops::structure',compact('structure'));
    }

}
