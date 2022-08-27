<?php

namespace App\Models;

use App\Helper\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Special extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'short_description',
        'long_description',
        'image',
        'status',
    ];

    public static function saveSpecialData($request, $id = null)
    {
        Special::updateOrCreate(['id' => $id], [
            'category_id' => $request->category_id,
            'title' => $request->title,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'image' => Helper::imageUpload($request->file('image'), 'special/img/', isset($id) ? Special::where('id', $id)->first()->image : ''),
            'status' => $request->status,
        ]);
    }

    public function category()
    {
        return $this->belongsTo(SpecialCategory::class);
    }
}
