<?php
/**
 * Created by PhpStorm.
 * User: zgs
 * Date: 2020/5/21
 * Time: 上午9:47
 */
/**
 * 业务逻辑加锁1秒
 * @author zhao
 */
function lock_up($redis, $time, $lock_key, $lock_time)
{
    while($redis->setnx($lock_key, $time + $lock_time) == 0){
        if($time > $redis->get($lock_key) &&
            $time > $redis->getset($lock_key, $time + $lock_time)){
            break;
        }else{
            return false;
        }
    }
    return true;
}

/**
 * 删除锁
 * @author zhao
 */
function del_Lock($redis, $lock_key)
{
    $redis->del($lock_key);
}