<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string("user_name")->after("name");
            $table->string('phone', 15)->after('user_name');
            $table->string('avatar', 255)->nullable()->after('phone');
            $table->string('address', 255)->nullable()->after('avatar');
            $table->boolean('roles')->default(0)->nullable()->after('address');
            $table->enum('gender', [1, 2, 3])->nullable()->after('roles');
            $table->softDeletes()->after('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Xóa các trường đã thêm vào bảng users
            $table->dropColumn('user_name');
            $table->dropColumn('phone');       
            $table->dropColumn('avatar');
            $table->dropColumn('address');
            $table->dropColumn('roles');
            $table->dropColumn('gender');
            $table->dropSoftDeletes(); // Xóa trường soft delete
        });
    }
};
