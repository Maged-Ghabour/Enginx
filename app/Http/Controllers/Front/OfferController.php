<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function index()
    {
        $data['offers'] = Offer::all();
        return view('Front.Offers.index')->with($data);
    }

    public function show($id)
    {
    }
}
