<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RacksController extends Controller {
public function index(){
$Racks = DB::select('select * from wool.v_rack_capacity');
return view('stud_view',['Racks'=>$Racks]);
}
}