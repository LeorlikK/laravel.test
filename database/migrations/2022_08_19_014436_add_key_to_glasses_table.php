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
        Schema::table('glasses', function (Blueprint $table) {
//            $table->unsignedBigInteger('brand_id')->after('discount')->nullable();
//            $table->foreign('brand_id')->on('brands')->references('id')->onDelete('cascade');
            $table->foreignId('brand_id')->after('discount')->nullable()->constrained('brands', 'id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('glasses', function (Blueprint $table) {
            $table->dropForeign('glasses_brand_id_foreign');
            $table->dropColumn('brand_id');
        });
    }
};
