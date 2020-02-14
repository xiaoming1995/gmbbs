<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\Api\CaptchaRequest;
use Gregwar\Captcha\CaptchaBuilder;


class CaptchasController extends Controller
{
    public function store(CaptchaRequest $request,CaptchaBuilder $captchaBuilder)
    {	
    	//key值
    	$key = 'Captcha-'.Str::random(15);

    	//手机号码
    	$phone = $request->phone;

    	//创建出来验证码
    	$captcha = $captchaBuilder->build();

    	//过期时间
    	$expiredAt = now()->addMinutes(2);

    	//缓存信息
    	\Cache::put($key,['phone'=>$phone,'code'=>$captcha->getPhrase()],$expiredAt);

    	 $result = [
            'captcha_key' => $key,
            'expired_at' => $expiredAt->toDateTimeString(),
            'captcha_image_content' => $captcha->inline()
        ];

         return response()->json($result)->setStatusCode(201);
    }
}
