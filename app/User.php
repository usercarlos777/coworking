<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Traits\GenericClassWithMedia;
use Illuminate\Support\Facades\DB;
// DB

class User extends Authenticatable
{
    use Notifiable;
    use GenericClassWithMedia;
    protected $connection = 'users';
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'name2',
        'surname',
        'surname2',
        'email',
        'password',
        'avatar',
        'number_cell',
        'rol',
        'profession',
        'status',
        'country',
        'state',
        'city',
        'birth_date',
        'amount',
        'restablecer_pass',
        'general_presentation',
        'gender',
        'count_like',
        'banner',
        'count_dislike',
        'code_country'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $images_attr = ['avatar', 'banner'];
    protected $folder_images = 'users_images';
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function  products()
    {
        return $this->hasMany(Product::class);
    }
    public function userServices()
    {
        return $this->hasMany(UserProducService::class);
    }

    //SCOPES
    public function scopeUsers($query)
    {
        return $query->where('rol', '!=', 'admin');
    }

    //Gueters
    public function getFullNameAttribute()
    {
        return $this->name . ' ' . $this->surname;
    }

    public function getFullNameAddAttribute()
    {
        return $this->name . ' ' . $this->name2 . ' ' . $this->surname . ' ' . $this->surname2;
    }
}
