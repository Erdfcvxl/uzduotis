<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Item;
use Illuminate\Support\Facades\Input;
use Illuminate\Contracts\View\View;

class ShopController extends Controller
{
    public function getIndex()
    {

        $items = Item::where(function($query){
            if(Input::has('color'))
                $query->whereIn('color', Input::get('color'));

            if(Input::has('size'))
                $query->whereIn('size', Input::get('size'));
        })->paginate(8);

        if(Input::ajax())
            return view('search._result')->withItems($items);

        return view('search.list')->withItems($items);
    }
}
