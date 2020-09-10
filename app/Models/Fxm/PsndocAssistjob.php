<?php
/**
 * Created by PhpStorm.
 * User: zgs
 * Date: 2020/8/17
 * Time: 上午10:04
 */

namespace App\Models\Fxm;


use App\Models\BaseModel;

class PsndocAssistjob extends BaseModel
{

    public function jobName()
    {
        return $this->belongsTo(OmJob::class, 'job_code', 'jobcode');
    }

}