<?php

namespace App\Models\User;

use App\Models\Amway\Amway;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    //表名
    const TABLE = 'df_user';

    protected $table = self::TABLE;

    protected $fillable = [
        'id',
        'phone',
        'zhw_id',
        'zhw_username',
        'dj_identify',
        'password',
        'avatar',
        'nickname',
        'gender',
        'email',
        'salt',
        'register_ip',
        'last_token',
        'status',
        'invite_code',
        'register_source',
        'qq_unionid',
        'weixin_unionid'
    ];

    protected $hidden = [
        'password',
        'last_token'
    ];

    protected $casts = [
        'status' => 'boolean'
    ];
    protected $dates = [
        'deleted_at'
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    public function amway()
    {
        return $this->hasMany(Amway::class, 'user_id', 'id');
    }
}
