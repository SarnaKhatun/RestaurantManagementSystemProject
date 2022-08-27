<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\BookTable;
use App\Models\Event;
use App\Models\Menu;
use App\Models\MenuCategory;
use App\Models\Slider;
use App\Models\Special;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    protected static $existBooking;
    protected static $hasBooking = false;

    public function index ()
    {
        self::$existBooking = BookTable::where('user_id', Auth::id())->first();
        if (isset(self::$existBooking))
        {
            self::$hasBooking = true;
        }

        return view('front.home.home', [
            'sliders' => Slider::latest()->take(3)->get(),
            'menus' => Menu::latest()->take(3)->get(),
            'specials' => Special::latest()->take(3)->get(),
            'events' => Event::latest()->take(3)->get(),
            'users' => User::where('access_label', 1)->get(),
            'usersT' => User::where('access_label', 2)->get(),
            'hasBooking' => self::$hasBooking,
        ]);
    }

    public function details ($id)
    {
        return view('front.details.menu', [
            'menu' => Menu::find($id),
        ]);
    }


    public function specialDetails ($id)
    {
        return view('front.details.special', [
            'special' => Special::find($id),
        ]);
    }

    public function showMenu ()
    {
        return view('front.menu.menu', [
            'menus' => Menu::latest()->get(),
        ]);
    }

    public function showSpecial ()
    {
        return view('front.special.special', [
            'specials' => Special::latest()->get(),
        ]);
    }

    public function showChef ()
    {
        return view('front.chef.chef', [
            'users' => User::where('access_label', 1)->get(),
        ]);
    }

    public function showEvent ()
    {
        return view('front.event.event', [
            'events' => Event::latest()->get(),
        ]);
    }

    public function showGallery ()
    {
        return view('front.gallery.gallery', [
            'sliders' => Slider::latest()->get(),
            'specials' => Special::latest()->get(),
            'events' => Event::latest()->get(),
        ]);
    }

}
