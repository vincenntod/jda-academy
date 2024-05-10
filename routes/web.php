<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;

Route::get('/login', function(){
    return view('login');
});
Route::get('/register', function(){
    return view('register');
});

Route::get('/', function(){
    $count_motor = 5;
    $count_brand = 4;
    $count_category = 5; 
    $count_sparepart = 40;
    $count_supplier =  4;

    return view('dashboard', compact('count_motor'))
    ->with(compact('count_brand'))
    ->with(compact('count_category'))
    ->with(compact('count_sparepart'))
    ->with(compact('count_supplier'));
});
Route::get('/dataChartListMotor', function(){
    $json = [
        "message" => "success",
        "result" => [
            [
                "count" => 1,
                "name_brand" => "Honda"
            ],
            [
                "count" => 3,
                "name_brand" => "Yamaha"
            ]
        ]
    ];
    return response()->json($json);
});

Route::get('/motor-menu', function(){
    return view('motor.motor-menu');
});
Route::get('/motor', function(){
    $json = [
            "data"=> [
                [
                    "id"=> 1,
                    "name_motor"=> "Hondu CBR",
                    "year_production"=> "2024",
                    "id_brand"=> 1,
                    "id_sparepart"=> "1",
                    "id_category_motor"=> 1,
                    "created_at"=> "2024-05-06 08=>16=>39",
                    "updated_at"=> "2024-05-06 08=>16=>39",
                    "name_brand"=> "Yameyameha",
                    "id_supplier"=> 1,
                    "price"=> 50000,
                    "name_sparepart"=> "Filter CVT",
                    "name_category_motor"=> "Sport"
                ],
                [
                    "id"=> 2,
                    "name_motor"=> "Yameyameha MT15",
                    "year_production"=> "2024",
                    "id_brand"=> 2,
                    "id_sparepart"=> "1",
                    "id_category_motor"=> 2,
                    "created_at"=> "2024-05-06 08=>16=>39",
                    "updated_at"=> "2024-05-06 08=>16=>39",
                    "name_brand"=> "Hondu",
                    "id_supplier"=> 1,
                    "price"=> 50000,
                    "name_sparepart"=> "Filter CVT",
                    "name_category_motor"=> "Matic"
                ],
                [
                    "id"=> 3,
                    "name_motor"=> "Kawasatki ZX25",
                    "year_production"=> "2024",
                    "id_brand"=> 1,
                    "id_sparepart"=> "1",
                    "id_category_motor"=> 1,
                    "created_at"=> "2024-05-06 08=>16=>39",
                    "updated_at"=> "2024-05-06 08=>16=>39",
                    "name_brand"=> "Yameyameha",
                    "id_supplier"=> 1,
                    "price"=> 50000,
                    "name_sparepart"=> "Filter CVT",
                    "name_category_motor"=> "Sport"
                ],
                [
                    "id"=> 4,
                    "name_motor"=> "Sujuki GSX",
                    "year_production"=> "2024",
                    "id_brand"=> 1,
                    "id_sparepart"=> "1",
                    "id_category_motor"=> 1,
                    "created_at"=> "2024-05-06 08=>16=>39",
                    "updated_at"=> "2024-05-06 08=>16=>39",
                    "name_brand"=> "Yameyameha",
                    "id_supplier"=> 1,
                    "price"=> 50000,
                    "name_sparepart"=> "Filter CVT",
                    "name_category_motor"=> "Sport"
                ]
            ]
        ];
        return response()->json($json);
});

Route::get('motor/create', function(){
    $brand = [
        (object)[
            "id" => 1,
            "name_brand" => "Yameyameha",
            "created_at" => "2024-05-06 08:16:39",
            "updated_at" => "2024-05-06 08:16:39"
        ],
        (object)[
            "id" => 2,
            "name_brand" => "Hondu",
            "created_at" => "2024-05-06 08:16:39",
            "updated_at" => "2024-05-06 08:16:39"
        ],
        (object)[
            "id" => 3,
            "name_brand" => "Kawasatki",
            "created_at" => "2024-05-06 08:16:39",
            "updated_at" => "2024-05-06 08:16:39"
        ],
        (object)[
            "id" => 4,
            "name_brand" => "Sujuki",
            "created_at" => "2024-05-06 08:16:39",
            "updated_at" => "2024-05-06 08:16:39"
        ]
    ];
    $sparepart = [
        (object)[
            "id" => 1,
            "id_supplier" => 1,
            "price" => 50000,
            "name_sparepart" => "Filter CVT",
            "created_at" => "2024-05-06 08:16:39",
            "updated_at" => "2024-05-06 08:16:39"
        ],
        (object)[
            "id" => 2,
            "id_supplier" => 2,
            "price" => 120000,
            "name_sparepart" => "Belt",
            "created_at" => "2024-05-06 08:16:39",
            "updated_at" => "2024-05-06 08:16:39"
        ],
        (object)[
            "id" => 3,
            "id_supplier" => 2,
            "price" => 10000,
            "name_sparepart" => "Klep",
            "created_at" => "2024-05-06 08:16:39",
            "updated_at" => "2024-05-06 08:16:39"
        ]
    ];
    $category = [
        (object)[
            "id" => 1,
            "name_category_motor" => "Sport",
            "created_at" => "2024-05-06 08:16:39",
            "updated_at" => "2024-05-06 08:16:39"
        ],
        (object)[
            "id" => 2,
            "name_category_motor" => "Matic",
            "created_at" => "2024-05-06 08:16:39",
            "updated_at" => "2024-05-06 08:16:39"
        ],
        (object)[
            "id" => 3,
            "name_category_motor" => "CB",
            "created_at" => "2024-05-06 08:16:39",
            "updated_at" => "2024-05-06 08:16:39"
        ]
    ];
    return view('motor.motor-add')->with('brand', $brand)->with('sparepart', $sparepart)->with('category', $category);
});


Route::get('/unautorized', function(){ return view("unautorized");});
Route::get('/notfound', function(){ return view("notfound");});

