<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 2/25/23
 * Time: 2:44 PM
 */


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
class StudViewController extends Controller
{
    //
    public function index()
    {
        $users = DB::select('select * from student_details');
        return view('stud_view',['users'=>$users]);
    }
}