<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
Use Illuminate\Support\Facades\DB;
class Product_Seeder extends Seeder
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
'name'=>'LG mobile',
'price'=>'10000',
'description'=>'owsum screen',
'category'=>'mobile',
'gallery'=>'https://i.ebayimg.com/images/g/u-kAAOSw9p9aXNyf/s-l500.jpg'
],
[
'name'=>'oppo mobile',
'price'=>'20000',
'description'=>'owsum screen lifs good',
'category'=>'mobile',
'gallery'=>'https://ssli.ebayimg.com/images/g/aJ0AAOSw7zlaldY2/s-l640.jpg'
],

[

    'name'=>'samsung mobile',
'price'=>'100000',
'description'=>'owsum screen',
'category'=>'mobile',
'gallery'=>'https://i.ebayimg.com/images/g/u-kAAOSw9p9aXNyf/s-l500.jpg'
],

[
'name'=>'vivo',
'price'=>'50000',
'description'=>'owsum screen',
'category'=>'mobile',
'gallery'=>'https://i.ebayimg.com/images/g/u-kAAOSw9p9aXNyf/s-l500.jpg'
]
]);
}
}