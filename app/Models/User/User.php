<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

class User extends Model
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
}
