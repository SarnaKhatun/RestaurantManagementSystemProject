<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BookTable;
use App\Models\Event;
use App\Models\Menu;
use App\Models\MenuCategory;
use App\Models\Slider;
use App\Models\Special;
use App\Models\SpecialCategory;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    protected static $userDetail;
    public function userChangeStatus ($id)
    {
        self::$userDetail = UserDetail::find($id);
        if (self::$userDetail->status == 1)
        {
            self::$userDetail->status = 0;
        }
        elseif (self::$userDetail->status == 0)
        {
            self::$userDetail->status = 1;
        }
        self::$userDetail->save();
        return back()->with('message', 'User status changed successfully');
    }


    protected static $slider;

    public function sliderChangeStatus ($id)
    {
        self::$slider = Slider::where('id', $id)->first();
        if (self::$slider->status == 1)
        {
            self::$slider->status = 0;
        }
        elseif (self::$slider->status == 0)
        {
            self::$slider->status = 1;
        }

        self::$slider->save();
        return back()->with('message', 'Slider status changed successfully');
    }

    protected static $menuCategory;
    public function menuCategoryChangeStatus ($id)
    {
        self::$menuCategory = MenuCategory::find($id);
        if (self::$menuCategory->status == 1)
        {
            self::$menuCategory->status = 0;
        }
        elseif (self::$menuCategory->status == 0)
        {
            self::$menuCategory->status = 1;
        }
        self::$menuCategory->save();
        return back()->with('message', 'Menu Category status changed successfully');
    }


    protected static $menu;
    public function menuChangeStatus ($id)
    {
        self::$menu = Menu::where('id', $id)->first();
        if (self::$menu->status == 1)
        {
            self::$menu->status = 0;
        }
        elseif (self::$menu->status == 0)
        {
            self::$menu->status = 1;
        }
        self::$menu->save();
        return back()->with('message', 'Menu status changed successfully');
    }

    protected static $specialCategory;

    public function specialCategoryChangeStatus($id)
    {
        self::$specialCategory = SpecialCategory::find($id);
        if (self::$specialCategory->status == 1)
        {
            self::$specialCategory->status = 0;
        }
        elseif (self::$specialCategory->status == 0)
        {
            self::$specialCategory->status = 1;
        }
        self::$specialCategory->save();
        return back()->with('message', 'Category Status changed successfully');
    }

    protected static $special;

    public function specialChangeStatus($id)
    {
        self::$special = Special::where('id', $id)->first();
        if (self::$special->status == 1)
        {
            self::$special->status = 0;
        }
        elseif (self::$special->status == 0)
        {
            self::$special->status = 1;
        }
        self::$special->save();
        return back()->with('message', 'Status changed successfully');
    }


    protected static $event;

    public function statusEvent ($id)
    {
        self::$event = Event::find($id);
        if (self::$event->status == 1)
        {
            self::$event->status = 0;
        }
        elseif (self::$event->status == 0)
        {
            self::$event->status = 1;
        }
        self::$event->save();
        return back()->with('message', 'Event status changed successfully');
    }


    protected static $booking;

    public function bookingStatus ($id)
    {
        self::$booking = BookTable::find($id);
        if (self::$booking->status == 'pending')
        {
            self::$booking->status = 'complete';
        }
        elseif (self::$booking->status == 'complete')
        {
            self::$booking->status = 'pending';
        }
        self::$booking->save();
        return back()->with('message', 'Booking status changed successfully');

    }
}
