<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('moonshine_users')->insert([
            'moonshine_user_role_id' => 1,
            'email' => 'admin@gmail.com',
            'password' => bcrypt('fXzQRabcdfa12'),
            'name' => 'Name',
            'avatar' => null,
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('moonshine_users')->where('email', 'admin@gmail.com')->delete();
    }
};
