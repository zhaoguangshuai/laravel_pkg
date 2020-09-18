<?php
/**
 * Created by PhpStorm.
 * User: zgs
 * Date: 2020/9/10
 * Time: 10:52 AM
 */

namespace App\Models\GYP;


use App\Models\BaseModel;

class AuctionHistories extends BaseModel
{
    const TABLE = 'auction_histories';

    protected $table = self::TABLE;

    public function goods()
    {
        return $this->belongsTo(AuctionGoods::class, 'auction_good_id', 'id');
    }


}