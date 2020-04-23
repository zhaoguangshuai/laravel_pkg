<?php
namespace App\Repositories\User;

use App\Models\User\User;
use App\Repositories\BaseRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthRepository extends BaseRepository
{
    public function passLogin(Request $request)
    {
        $phone = $request->input('phone');
        $pass_word = $request->input('pass_word');
        $user_info = User::query()->where('phone', $phone)->first();


        if (empty($user_info)) return $this->failed('该用户不存在');

        $token = Auth::guard('api')->setTTL(600)->fromUser($user_info);

        //让上一个token过期
        if ($user_info->last_token) {
            //提前判断该token是否过期，过期了就不用执行下面的操作了
            try {
                Auth::guard('api')->setToken($user_info->last_token)->invalidate();
            } catch (\Exception $e){
                //因为让一个过期的token再失效，会抛出异常，所以我们捕捉异常，不需要做任何处理
            }

        }
        //将新的token存储到数据库
        $user_info->last_token = $token;
        $user_info->save();

         $info = [
            'token' => 'bearer ' . $token,
            'token_type' => 'Bearer',
            'expires_in' => Auth::guard('api')->factory()->getTTL()
        ];
        return $this->success($info);
    }

    public function logout()
    {
        Auth::guard('api')->logout();
        return $this->success(trans('api.logout.success'));
    }

    public function userInfo(Request $request)
    {
        var_dump($request->user()->id);
        $payload = Auth::guard('api')->payload();
        var_dump($payload->get('sub'));
        var_dump($payload('exp'));
        dd($payload->get('prv'));
        return $this->success($request->user());
    }
}