<?php
/**
 * Created by PhpStorm.
 * User: zgs
 * Date: 2020/9/10
 * Time: 10:50 AM
 */

namespace App\Models\GYP;


use App\Models\BaseModel;

class AuctionGoods extends BaseModel
{
    const TABLE = 'auction_goods';

    protected $table = self::TABLE;

    public function auctionHistories()
    {
        return $this->hasMany(AuctionHistories::class, 'auction_good_id', 'id');
    }

    public function plays()
    {
        return $this->belongsTo(AuctionPlays::class, 'play_id', 'id');
    }
}