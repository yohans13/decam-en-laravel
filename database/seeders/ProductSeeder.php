<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
            'name'=>'Samsung j5',
            "price"=>"44000",
            "category"=>"phone",
            "description" =>"Smart phone with 2 gb ram and extra large screen",
            "gallery" =>"https://www.raramart.co.jp/assets/uploads/products/2020-08-24-06-55-03-Samsung-Galaxy-J5-Black.jpg"
            ],
            [
                'name'=>'Oppo F7',
                "price"=>"22000",
                "category"=>"phone",
                "description" =>"Smart phone with 6 gb ram and extra large screen",
                "gallery" =>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQCQGJwfU90hhsEkOUxZsSvlWtkdybRTVPCA&usqp=CAU"
                ],
                [
                    'name'=>'Nokia i7 plus',
                    "price"=>"53000",
                    "category"=>"phone",
                    "description" =>"Smart phone with 2 gb ram and extra large screen",
                    "gallery" =>"https://img.gkbcdn.com/s3/p/2018-03-14/nokia-7-plus-6-0-inch-6gb-64gb-smartphone-black-1571991893594.jpg"
                    ],
                    [
                        'name'=>'HUAWEI P30 Pro',
                        "price"=>"33000",
                        "category"=>"phone",
                        "description" =>"Smart phone with 8 gb ram and extra large screen",
                        "gallery" =>"https://images-na.ssl-images-amazon.com/images/I/51zDfRUUhHL._AC_SX522_.jpg"
                        ],
                        [
                            'name'=>'panasonic tv',
                            "price"=>"95000",
                            "category"=>"Tv",
                            "description" =>"Smart Television with touch screen",
                            "gallery" =>"https://ganna.lk/wp-content/uploads/2019/12/PANASONIC-2.jpg"
                            ],
                            [
                                'name'=>'Lg Fridge',
                                "price"=>"75000",
                                "category"=>"fridge",
                                "description" =>"Lg Frige withtwo doors",
                                "gallery" =>"https://www.lg.com/lk/GNB_image/AP_REF.jpg"
                            ]

        ]);

    }
}
