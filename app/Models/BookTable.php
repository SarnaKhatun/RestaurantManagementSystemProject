<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class BookTable extends Model
{
    use HasFactory;
    protected $fillable = [
      'name',
      'email',
      'phone',
      'date',
      'time',
      'people',
      'message',
        'user_id',
        'status',
    ];

    public static function bookTable ($request)
    {
        BookTable::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'date' => $request->date,
            'time' => $request->time,
            'people' => $request->people,
            'message' => $request->message,
            'user_id' => Auth::id(),
            'status' => 'pending',
        ]);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
