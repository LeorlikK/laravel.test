<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('category_glasses', function (Blueprint $table) {
            $table->foreignId('category_id')->nullable()->constrained('categories', 'id');
            $table->foreignId('glasses_id')->nullable()->constrained('glasses', 'id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('category_glasses', function (Blueprint $table) {
            $table->dropForeign('category_glasses_brand_id_foreign');
            $table->dropForeign('category_glasses_glasses_id_foreign');
        });
    }
};
