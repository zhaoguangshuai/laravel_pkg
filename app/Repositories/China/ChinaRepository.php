<?php
/**
 * Created by PhpStorm.
 * User: zgs
 * Date: 2020/6/1
 * Time: 上午9:51
 */

namespace App\Repositories\China;

use App\Repositories\BaseRepository;
use Aoxiang\Pca\ProvinceCityArea;
use ChinaDivisions\Division;

class ChinaRepository extends BaseRepository
{
    public function ssqInfo()
    {
        //return $this->success(ProvinceCityArea::getProvinceList());
        //return $this->success(ProvinceCityArea::getCityList(1));
        //dd(ProvinceCityArea::getName(21, 1827, 40847, ''));
        return $this->success(ProvinceCityArea::getName(21, 1827, 40847, ''));
    }

    public function newChinaInfo()
    {
        $division = new Division(1); // 参数为 DivisionID；1 代表中国，即根结点。
        $division->self();// 获取自身信息，返回键值数组
        return $this->success($division->children());// 获取下一级子区划，返回 Division 对象数组
    }
}