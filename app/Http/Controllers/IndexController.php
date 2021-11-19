<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function flyer(Request $request) {
        $c = 0;
        if ($request->quest1 === '204+1') {
            $c = $c + 1;
        };
        if ($request->quest2 === '8/8/78') {
            $c++;
        };
        if ($request->quest3 === '04983770') {
            $c++;
        };
        if ($request->quest4 === '211') {
            $c++;
        };
        if ($request->quest5 === 'Mami') {
            $c++;
        };
        if ($request->quest6 === 'tony') {
            $c++;
        };
        return view ('flyer', ['count' => $c]);
    }
}
