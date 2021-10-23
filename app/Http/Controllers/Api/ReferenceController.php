<?php

namespace App\Http\Controllers\Api;

use App\Models\Device;
use App\Models\Sensor;
use App\Models\Reference;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReferenceController extends Controller
{

    public function index(){
        //reads all reference in the database
        $reference = Reference::with('references')->get();
        return response()->json($reference);
    }
  
    public function show($id){
      //find a reference by id if not it throws an expetion
      $reference = Reference::findOrFail($id);
      return response()->json($reference);
  }

   
}
