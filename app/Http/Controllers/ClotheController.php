<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clothe;

class ClotheController extends Controller
{
    public function index() {
      $all_clothes = Clothe::all();
      $data = [
        'clothes_list' => $all_clothes
      ];
      return view('clothes')->with([
        'clothes_list' => $all_clothes
      ]);
    }
}
