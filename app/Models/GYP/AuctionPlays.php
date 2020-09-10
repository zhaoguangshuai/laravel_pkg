<?php
/**
 * Created by PhpStorm.
 * User: zgs
 * Date: 2020/9/10
 * Time: 10:45 AM
 */

namespace App\Models\GYP;


use App\Models\BaseModel;

class AuctionPlays extends BaseModel
{
    const TABLE = 'auction_plays';

    protected $table = self::TABLE;
}