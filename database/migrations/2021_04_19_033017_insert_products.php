<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Product;
use App\Category;

class InsertProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $cat = new Category(['category'=>'all']);
        $cat->save();

        $product = new Product(['name'=>'Apple', 'value'=>3,
                                    'photo'=>'public/img/Apple', 'description'=>'',
                                    'category_id'=>$cat->id]);
        $product->save();

        $product2 = new Product(['name'=>'Avocado', 'value'=>4,
            'photo'=>'public/img/Avocado', 'description'=>'',
            'category_id'=>$cat->id]);
        $product2->save();

        $product3 = new Product(['name'=>'Banana', 'value'=>2,
            'photo'=>'public/img/Banana', 'description'=>'',
            'category_id'=>$cat->id]);
        $product3->save();

        $product4 = new Product(['name'=>'Broccoli', 'value'=>2,
            'photo'=>'public/img/Broccoli', 'description'=>'',
            'category_id'=>$cat->id]);
        $product4->save();

        $product5 = new Product(['name'=>'Carrot', 'value'=>3,
            'photo'=>'public/img/Carrot', 'description'=>'',
            'category_id'=>$cat->id]);
        $product5->save();

        $product6 = new Product(['name'=>'Kiwi', 'value'=>5,
            'photo'=>'public/img/Kiwi', 'description'=>'',
            'category_id'=>$cat->id]);
        $product6->save();

        $product7 = new Product(['name'=>'Papaya', 'value'=>3,
            'photo'=>'public/img/Papaya', 'description'=>'',
            'category_id'=>$cat->id]);
        $product7->save();

        $product8 = new Product(['name'=>'Pepper', 'value'=>7,
            'photo'=>'public/img/Pepper', 'description'=>'',
            'category_id'=>$cat->id]);
        $product8->save();

        $product8 = new Product(['name'=>'Potato', 'value'=>2,
            'photo'=>'public/img/Potato', 'description'=>'',
            'category_id'=>$cat->id]);
        $product8->save();

        $product8 = new Product(['name'=>'Strawberry', 'value'=>6,
            'photo'=>'public/img/Strawberry', 'description'=>'',
            'category_id'=>$cat->id]);
        $product8->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
