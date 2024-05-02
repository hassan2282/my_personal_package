<?php

namespace Seyyed\First\controller;

class firstController extends baseController
{
    public function index()
    {
        $merchantID = config('first.merchantID');
        return view('first::index', compact('merchantID'));
    }
}
