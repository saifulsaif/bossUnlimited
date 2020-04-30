<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Photo;
class ApiController extends Controller
{
  public function getPhoto(){
   return Response()->json(Photo::get(),200);
  }
}
