<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;
use Illuminate\Pagination;

class RecordsController extends Controller
{
    public function showRecords(){

        $res=Record::paginate(7);

        return view('main')->with('res',$res);
    }
}
