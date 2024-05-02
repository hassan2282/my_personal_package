<?php

namespace Seyyed\First\controller;

use Seyyed\First\models\finance;

class firstController extends baseController
{
    public function index()
    {
        $merchantID = config('first.merchantID');
        return view('first::index', compact('merchantID'));
    }

    public function create()
    {
        finance::create([
           'merchantID' => config('first.merchantID'),
        ]);
    }
}
