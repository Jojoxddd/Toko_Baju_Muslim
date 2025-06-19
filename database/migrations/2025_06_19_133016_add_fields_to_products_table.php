<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToProductsTable extends Migration
{
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            if (!Schema::hasColumn('products', 'name')) {
                $table->string('name')->nullable();
            }
            if (!Schema::hasColumn('products', 'price')) {
                $table->integer('price')->nullable();
            }
            if (!Schema::hasColumn('products', 'stock')) {
                $table->integer('stock')->nullable();
            }
            if (!Schema::hasColumn('products', 'category')) {
                $table->string('category')->nullable();
            }
            if (!Schema::hasColumn('products', 'image')) {
                $table->string('image')->nullable();
            }
        });
    }

    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['name', 'price', 'stock', 'category', 'image']);
        });
    }
}
