<?php

namespace App\Http\Controllers\theme\cards;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CardBasic extends Controller
{
  public function index()
  {
    return view('content.cards.cards-basic');
  }
}
