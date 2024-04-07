<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class TemperatureController extends Controller
{
    public function ctf(?float $c = null) {
        if($c == null) {
            dd('Nie podano wartosci');
        } else {
            $f = ($c * 9/5) + 32;
            dump($c.' *C to '.$f.' *F');
            return $c.' *C to '.$f.' *F';
        }
    }
}
