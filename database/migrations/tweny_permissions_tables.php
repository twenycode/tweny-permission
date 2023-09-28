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
            $table->string('group_name')->nullable()->after('name');
            $table->mediumText('descriptions')->nullable()->after('guard_name');
        });

        Schema::table('roles', function (Blueprint $table) {
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
            $table->dropColumn(['group_name','descriptions']);
        });

        Schema::table('roles', function (Blueprint $table) {
            $table->dropColumn(['descriptions']);
        });
    }
};
