<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'description',
        'phone',
        'status',
    ];

    public static function UserDetail($user)
    {
        UserDetail::updateOrCreate(['user_id' => UserDetail::where('user_id', $user->id)->first()], [
            'user_id' => $user->id,
        ]);
    }
}
