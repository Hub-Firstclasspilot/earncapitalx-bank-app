<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'avatar',
        'name',
        'email',
        'password',
        'unhashed_pass',
        'username',
        'mobile',
        'referral_link',
        'ip_address',
        'country'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function account()
    {
        return $this->hasOne(Account::class);
    }

    public function withdrawals()
    {
        return $this->hasMany(Withdrawal::class);
    }

    public function investments()
    {
        return $this->hasMany(Investment::class);
    }

    public function earnings()
    {
        return $this->hasMany(Earning::class);
    }

    public function history()
    {
        return $this->hasMany(History::class);
    }

    public function referrals()
    {
        return $this->hasOne(Referral::class);
    }
}
