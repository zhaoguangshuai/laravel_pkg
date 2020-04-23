<?php

Route::namespace('Api')->prefix('test')->group(function () {

            Route::namespace('Test')->group(function () {
                //测试接口
                Route::get('test/index', 'TestController@index')->name('test.index');
            });

            Route::namespace('User')->group(function () {
                //账号密码登录
               Route::post('login/pass', 'AuthController@passLogin')->name('user.login.pass');
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
            });





});
