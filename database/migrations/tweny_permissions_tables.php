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
        Schema::table('permissions', function (Blueprint $table) {
            $table->string('category')->nullable()->after('guard_name');
            $table->string('guard_name')->default('web')->change();
            $table->mediumText('descriptions')->nullable()->after('category');
        });

        Schema::table('roles', function (Blueprint $table) {
            $table->string('guard_name')->default('web')->change();
            $table->mediumText('descriptions')->nullable()->after('guard_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('permissions', function (Blueprint $table) {
            $table->dropColumn(['category','descriptions']);
        });

        Schema::table('roles', function (Blueprint $table) {
            $table->dropColumn(['descriptions']);
        });
    }
};
