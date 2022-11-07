<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\item;
use App\Models\customer;
use App\Models\guest;
use App\Models\profile;

class MainController extends Controller
{
    public function hasMany() {
        //attribute
        $customer = customer::find(2);
        $item = new item();

        $item->title = 'hello world';
        $item->customers()->associate($customer)->save();
        return $item;
    }

    public function hasOne() {
        $guest = guest::find(2);
        $profile = new profile();

        $profile->title = 'profile title';
        $profile->guest()->associate($guest)->save();
        return $profile;
    }
}
