<?php

namespace App\Models\Amway;

use App\Models\BaseModel;
use App\Models\User\User;

class Amway extends BaseModel
{
    const TABLE = 'df_amway';

    protected $table = self::TABLE;

    const TYPE_PENDING = 'pending';
    const TYPE_PASSED  = 'passed';
    const TYPE_FAILED  = 'failed';

    public static $statusMap = [
        self::TYPE_PENDING => '审核中',
        self::TYPE_PASSED  => '审核通过',
        self::TYPE_FAILED  => '未通过'
    ];

    protected $fillable = [
        'content',
        'weight',
        'type',
        'status',
        'view_count',
        'is_home',
        'is_admin',
        'remark',
        'check_at'
    ];

    protected $casts = [
        'status'   => 'boolean',
        'is_home'  => 'boolean',
        'is_admin' => 'boolean'
    ];

    protected $dates = [
        'check_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
