<?php

Route::namespace('Api')->prefix('test22')->group(function () {

            Route::namespace('Test')->group(function () {
                //测试接口
                Route::get('test/index', 'TestController@index')->name('test.index');
                //测试自己开发一个契约
                Route::get('test/contracts', 'TestController@testContracts')->name('test.contracts');
            });

            Route::namespace('User')->group(function () {
                //账号密码登录
               Route::post('login/pass', 'AuthController@passLogin')->name('user.login.pass');
            });

            //测试自动加载
            Route::get('auto/load/register', function () {
                return response()->json(['hehe' => lock_up(\Illuminate\Support\Facades\Redis::connection(),
                    $_SERVER['REQUEST_TIME'], 'lock', 500)]);
            });

            Route::namespace('China')->group(function () {
               Route::get('china/divisions', 'ChinaController@ssqInfo')->name('china.division.ssq');
                Route::get('new/china/divisions', 'ChinaController@newChinaInfo')->name('new.china.division.ssq');

            });

            route::middleware('api.refresh')->group(function () {
                //获取用户安利墙列表
                Route::namespace('Amway')->group(function () {
                    Route::put('amway/{amway}', 'AmwayController@updateAmway')->name('amway.update');
                    Route::get('amway', 'AmwayController@index')->name('amway.list');
                    Route::post('amway', 'AmwayController@addAmway')->name('amway.add');
                });

                Route::namespace('User')->group(function () {
                    //获取用户信息
                    Route::get('login/user/info', 'AuthController@userInfo')->name('user.info');
                    //退出登录
                    Route::post('login/logout', 'AuthController@logout')->name('user.logout');
                });

                //测试spatie/laravel-medialibrary这个扩展包
                Route::post('media', function (\Illuminate\Http\Request $request) {
                    $user = $request->user();
                    $user->addMediaFromRequest('photo')->toMediaCollection('photo');
                    return response()->json([], 201);
                });

                //测试rinvex/countries这个扩展包
                Route::get('countries', function() {
                    $countries = \Rinvex\Country\CountryLoader::where('geo.region', 'Asia');

                    return response()->json($countries);
                });

            });





});
