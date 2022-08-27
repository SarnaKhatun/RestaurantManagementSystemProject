<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'description',
        'price',
        'status',
    ];

    public static function saveMenu ($request, $id = null)
    {
        Menu::updateOrCreate(['id' => $id], [
            'category_id' => $request->category_id,
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'status' => $request->status,
        ]);
    }

    public function category()
    {
        return $this->belongsTo(MenuCategory::class);
    }
}
