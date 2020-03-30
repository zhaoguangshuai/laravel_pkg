<?php

Route::namespace('Api')->prefix('test')->group(function () {

            Route::namespace('Test')->group(function () {
                //测试接口
                Route::get('test/index', 'TestController@index')->name('test.index');
            });


});
