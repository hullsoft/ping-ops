<?php

namespace HullSoft\Seat\PingOps\Http\Controllers;

use Seat\Web\Http\Controllers\Controller;
use HullSoft\Seat\PingOps\Models\PingOspMain;
use Illuminate\Http\Request;

//use HullSoft\Seat\PingOps\Helpers\Helper;

/**
 * Class HomeController
 * @package Author\Seat\YourPackage\Http\Controllers
 */
class HomeController extends Controller {

    public function getHome() {
        $list = [];
        $list = PingOspMain::all()->sortBy('date_begin');
        return view('pingops::index', compact('list'));
    }

    public function edit($id) {
        $edit = [];
        $edit = PingOspMain::where('id', '=', $id)->get();
        return view('pingops::edit', compact('edit'));
    }

    public function savePing(Request $request) {
        try {
            PingOspMain::where('id', '=', $request->id)->update(['date_begin' => $request->date_begin, 'system' => $request->system, 'message' => htmlspecialchars($request->message)]);

            return redirect()->route('pingops.index')->with('success', "Запись ID=$request->id обновлена");
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('pingops.index')->with('error', $e->errorInfo);
        }
    }

    public function addNew(Request $request) {
        if ($request->message && $request->date_begin) {
            try {
                $newRec = new PingOspMain();
                $newRec->date_begin = $request->date_begin;
                $newRec->system = $request->system;
                $newRec->message = $request->message;
                $newRec->save();
                return redirect()->route('pingops.index')->with('success', 'Запись добавлена удачно');
            } catch (\Illuminate\Database\QueryException $e) {
                return redirect()->route('pingops.index')->with('error', 'Пинг на такое время уже есть!');
            }
        }
    }

    public function disabled($id) {
        try {
            PingOspMain::where('id', '=', $id)->update(['active' => 0]);

            return redirect()->route('pingops.index')->with('success', "Запись ID=$id отключена");
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('pingops.index')->with('error', $e->errorInfo);
        }
    }

    public function enabled($id) {
        try {
            PingOspMain::where('id', '=', $id)->update(['active' => 1]);

            return redirect()->route('pingops.index')->with('success', "Запись ID=$id включена");
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('pingops.index')->with('error', $e->errorInfo);
        }
    }

    public function delete(int $id) {

        try {
            PingOspMain::destroy($id);
            return redirect()->route('pingops.index')->with('success', "Запись ID=$id удалена");
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('pingops.index')->with('error', $e->errorInfo);
        }
    }

}
