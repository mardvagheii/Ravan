<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->text('username');
            $table->text('profile');
            $table->text('password');
            $table->rememberToken();
            $table->timestamps();
        });
        DB::table('admins')->insert(
            [
                'username'=>'09150726835',
                'profile'=>'public/vendor/media/image/avatar.jpg',
                'password'=>'$2y$10$OpeSidSAYJvjbVWLPpdIKOVqgeKN86nRbLZpmcTf3ZRAYONHfuHNq',
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
