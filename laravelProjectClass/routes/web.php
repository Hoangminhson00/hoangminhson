<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get(
    '/home',
    function () {
        $html = "<h1>Welcome to my world</h1>";
        return $html;
    }
);

Route::get('/greeting', function() {
    return view('greeding', ['name' => 'TiNo']);
});

Route::get('/customer', function() {
    return view('customer');
} 
);

// Cách khác
// Route::get('/customer',
//     'App\Http\Controllers\CustomerController@index'
// );

// Route::get('/getProduct', function() { //get để gọi post để lưu csdl đồng thời đẩy thông báo lên
//     return view('getProducts');
// });

Route::group(['prefix' => 'admin'], function() {
    Route::group(['prefix' => 'product'], function() {
        Route::get('/getProducts',
            'App\Http\Controllers\ProductController@getProducts'
        )->name('getProducts');
        
        Route::get('/getProductsByBand',
            'App\Http\Controllers\ProductController@getProductsByBand'
        ) -> name('admin.product.getProductsByBand');

        Route::get('/getProductsByName',
        'App\Http\Controllers\ProductController@getProductsByName'
        ) -> name('admin.product.getProductsByName');

        Route::get('/getProductsByYear',
            'App\Http\Controllers\ProductController@getProductsByYear'
        ) -> name('admin.product.getProductsByYear');

        Route::get('/insertProduct',
            'App\Http\Controllers\ProductController@forminsertProduct'
        );

        Route::post('/insertProduct',
        'App\Http\Controllers\ProductController@insertProduct'
        ) ;

        Route::get('/deleteProduct/{id}',
            'App\Http\Controllers\ProductController@deleteProduct'
        ) ;

        Route::get('/updateProduct',
            'App\Http\Controllers\ProductController@updateProduct'
        ) -> name('admin.product.updateProduct');
    });

    Route::group(['prefix' => 'customer'], function() {
        Route::get('/getCustomer',
            'App\Http\Controllers\CustomerController@getCustomer'
        );
    });

    Route::group(['prefix' => 'order'], function() {
        Route::get('/getCustomer',
            'App\Http\Controllers\OrderController@getOrder'
        );
    });

    Route::group(['prefix' => 'orderdetail'], function() {

    });
});