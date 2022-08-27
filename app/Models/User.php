<?php

namespace App\Models;

use App\Helper\Helper;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'access_label',
        'image',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];


    protected static $user;

    public static function createUser($request)
    {
       self::$user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'access_label' => $request->access_label,
            'image' => Helper::imageUpload($request->file('image'), 'user-assets/img/'),
        ]);

       UserDetail::UserDetail(self::$user);
    }

    public static function updateUser ($request, $id)
    {
        self::$user = User::where('id', $id)->first();

        self::$user->name                = $request->name;
        self::$user->email               = $request->email;
        self::$user->access_label        = $request->access_label;
        self::$user->image               = Helper::imageUpload($request->file('image'), 'user-update/image/', isset($id) ? User::find($id)->image : '');
        self::$user->save();
    }


    protected static $userDetails;

    public static function updateProfile($request)
    {
        User::updateOrCreate(['id' => Auth::id()], [
           'name' => $request->name,
           'email' => $request->email,
            'image' => Helper::imageUpload($request->file('image'), 'profile-update/image/'),
        ]);

        self::$userDetails = UserDetail::where('user_id', Auth::id())->first();
        self::$userDetails->phone = $request->phone;
        self::$userDetails->description = $request->description;
        self::$userDetails->save();



    }


    public function userDetail()
    {
        return $this->hasOne(UserDetail::class);
    }

}
