<?php

namespace App\Http\Controllers;

use App\Models\Habits;
use Illuminate\Http\Request;

class HabitController extends Controller
{
    public function add_habit(Request $req){
        $habbit = new Habits();
        $habbit->title = $req->input('title');
        $habbit->type = $req->input('type');
        $habbit->complexity = $req->input('complexity');
        $habbit->save();


    }
}
