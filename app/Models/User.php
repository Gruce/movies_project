<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;

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
        'type',
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
        'is_admin',
    ];

    public function favourites(){
        return $this->hasMany(Favourite::class);
    }

    public function queues(){
        return $this->hasMany(Queue::class);
    }

    public function likes(){
        return $this->hasMany(Like::class);
    }


    /***********************************************************/
    /******************* ACCESSOR AND MUTATOR ******************/
    /***********************************************************/

    protected function isAdmin(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->type === 1,
        );
    }



    /****************************************************/
    /******************* SCOPES *************************/
    /****************************************************/

    public function scopeAdmins($query)
    {
        return $query->where('type', 1);
    }

}
