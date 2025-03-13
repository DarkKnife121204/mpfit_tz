<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->text('full_name');
            $table->enum('status', ['new', 'completed'])->default('new');
            $table->text('comment')->nullable();
            $table->foreignId('product_id')->index()->constrained('products');
            $table->decimal('total_price',8,2);
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
