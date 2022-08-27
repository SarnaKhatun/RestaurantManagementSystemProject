<?php

namespace App\Models;

use App\Helper\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'image',
        'description',
        'status',
    ];

    public static function eventData($request, $id = null)
    {
        Event::updateOrCreate(['id' => $id], [
            'name' => $request->name,
            'price' => $request->price,
            'image' => Helper::imageUpload($request->file('image'), 'event/image/', isset($id) ? Event::find($id)->image : ''),
            'description' => $request->description,
            'status' => $request->status,
        ]);
    }
}
