<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seen;
use auth;
use DB;
class SeenController extends Controller
{
    public function index(){
        $id=Auth::id();

        $data = DB::table('seens')->where('status', '=', 1)
        ->where('user_id', '!=', $id)
        ->get();
        dd($data);
    }
}
