<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateAdvisorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advisors', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('networks')->nullable();
            $table->text('mobile');
            $table->text('email')->nullable();
            $table->text('username');
            $table->text('password')->nullable();
            $table->text('bio')->nullable();
            $table->text('education')->nullable();
            $table->text('resume')->nullable();
            $table->text('option')->nullable();
            $table->text('address')->nullable();
            $table->text('tel')->nullable();
            $table->text('price')->nullable();
            $table->text('consultations_times')->nullable();
            $table->integer('time_of_one_consultation')->nullable();
            $table->text('video')->nullable();
            $table->text('status')->nullable();
            $table->text('vip')->nullable();
            $table->timestamps();
        });
        DB::table('advisors')->insert([
            [
                'name' => 'آقای مشاور',
                'networks' => 'a:0:{}',
                'mobile' => '09156145545',
                'email' => 'a@gmail.com',
                'username' => 'moshaver',
                'password' => '123456',
                'bio' => 'سلام، مشاورم',
                'resume' => 'کارآفرین اجتماعی',
                'education' => 'لیسانس',
                'option' => 'مشاور روانشناسي',
                'address' => 'نيشابور، كنار كال',
                'tel' => '0514321',
                'price' => '800',
                'consultations_times' => '{"NotSliced":{"1399\/09\/05":[{"StartTime":"08:30","EndTime":"14:30"},{"StartTime":"01:05","EndTime":"06:30"}],"1399\/09\/04":[{"StartTime":"08:30","EndTime":"14:30"}]},"Sliced":{"1399\/09\/05":[{"Time":"08:30","Status":"1"},{"Time":"08:53","Status":"1"},{"Time":"09:16","Status":"0"},{"Time":"09:39","Status":"1"},{"Time":"10:02","Status":"1"},{"Time":"10:25","Status":"1"},{"Time":"10:48","Status":"1"},{"Time":"11:11","Status":"1"},{"Time":"11:34","Status":"1"},{"Time":"11:57","Status":"1"},{"Time":"12:20","Status":"1"},{"Time":"12:43","Status":"1"},{"Time":"13:06","Status":"1"},{"Time":"13:29","Status":"1"},{"Time":"13:52","Status":"1"},{"Time":"14:15","Status":"1"},{"Time":"01:05","Status":"1"},{"Time":"01:28","Status":"1"},{"Time":"01:51","Status":"1"},{"Time":"02:14","Status":"1"},{"Time":"02:37","Status":"1"},{"Time":"03:00","Status":"1"},{"Time":"03:23","Status":"1"},{"Time":"03:46","Status":"1"},{"Time":"04:09","Status":"1"},{"Time":"04:32","Status":"1"},{"Time":"04:55","Status":"1"},{"Time":"05:18","Status":"1"},{"Time":"05:41","Status":"1"},{"Time":"06:04","Status":"1"},{"Time":"06:27","Status":"1"}],"1399\/09\/04":[{"Time":"08:30","Status":"1"},{"Time":"08:53","Status":"1"},{"Time":"09:16","Status":"1"},{"Time":"09:39","Status":"1"},{"Time":"10:02","Status":"1"},{"Time":"10:25","Status":"1"},{"Time":"10:48","Status":"0"},{"Time":"11:11","Status":"1"},{"Time":"11:34","Status":"1"},{"Time":"11:57","Status":"1"},{"Time":"12:20","Status":"1"},{"Time":"12:43","Status":"1"},{"Time":"13:06","Status":"1"},{"Time":"13:29","Status":"1"},{"Time":"13:52","Status":"1"},{"Time":"14:15","Status":"1"}]}}',
                'video' => '/uploads/Videos/alireza-nikmorad.mp4',
                'status' => '0',
                'vip' => '0',
            ],
            [
                'name' => ' آقای مشاور دهنده',
                'networks' => 'a:0:{}',
                'mobile' => '09150726835',
                'email' => 'a@gmail.com',
                'username' => 'moshaver',
                'password' => '123456',
                'bio' => 'سلام به همه',
                'resume' => 'کارآفرین اجتماعی',
                'education' => 'لیسانس',
                'option' => 'مشاور روانشناسي',
                'address' => 'نيشابور، كنار كال',
                'tel' => '0514321',
                'price' => '800',
                'consultations_times' => '{"NotSliced":{"1399\/09\/05":[{"StartTime":"08:30","EndTime":"14:30"},{"StartTime":"01:05","EndTime":"06:30"}],"1399\/09\/04":[{"StartTime":"08:30","EndTime":"14:30"}]},"Sliced":{"1399\/09\/05":[{"Time":"08:30","Status":"1"},{"Time":"08:53","Status":"1"},{"Time":"09:16","Status":"0"},{"Time":"09:39","Status":"1"},{"Time":"10:02","Status":"1"},{"Time":"10:25","Status":"1"},{"Time":"10:48","Status":"1"},{"Time":"11:11","Status":"1"},{"Time":"11:34","Status":"1"},{"Time":"11:57","Status":"1"},{"Time":"12:20","Status":"1"},{"Time":"12:43","Status":"1"},{"Time":"13:06","Status":"1"},{"Time":"13:29","Status":"1"},{"Time":"13:52","Status":"1"},{"Time":"14:15","Status":"1"},{"Time":"01:05","Status":"1"},{"Time":"01:28","Status":"1"},{"Time":"01:51","Status":"1"},{"Time":"02:14","Status":"1"},{"Time":"02:37","Status":"1"},{"Time":"03:00","Status":"1"},{"Time":"03:23","Status":"1"},{"Time":"03:46","Status":"1"},{"Time":"04:09","Status":"1"},{"Time":"04:32","Status":"1"},{"Time":"04:55","Status":"1"},{"Time":"05:18","Status":"1"},{"Time":"05:41","Status":"1"},{"Time":"06:04","Status":"1"},{"Time":"06:27","Status":"1"}],"1399\/09\/04":[{"Time":"08:30","Status":"1"},{"Time":"08:53","Status":"1"},{"Time":"09:16","Status":"1"},{"Time":"09:39","Status":"1"},{"Time":"10:02","Status":"1"},{"Time":"10:25","Status":"1"},{"Time":"10:48","Status":"0"},{"Time":"11:11","Status":"1"},{"Time":"11:34","Status":"1"},{"Time":"11:57","Status":"1"},{"Time":"12:20","Status":"1"},{"Time":"12:43","Status":"1"},{"Time":"13:06","Status":"1"},{"Time":"13:29","Status":"1"},{"Time":"13:52","Status":"1"},{"Time":"14:15","Status":"1"}]}}',
                'video' => '/uploads/Videos/alireza-nikmorad.mp4',
                'status' => '0',
                'vip' => '0',
            ],
            [
                'name' => 'خانم مشاور',
                'networks' => 'a:0:{}',
                'mobile' => '09156145546',
                'email' => 'a@gmail.com',
                'username' => 'moshaver',
                'password' => '123456',
                'bio' => 'سلام، مشاورم',
                'resume' => 'کارآفرین اجتماعی',
                'education' => ' لیسانس',
                'option' => 'مشاور روانشناسي',
                'address' => 'نيشابور، كنار كال',
                'tel' => '0514321',
                'price' => '880',
                'consultations_times' => '{"NotSliced":{"1399\/09\/05":[{"StartTime":"08:30","EndTime":"14:30"},{"StartTime":"01:05","EndTime":"06:30"}],"1399\/09\/04":[{"StartTime":"08:30","EndTime":"14:30"}]},"Sliced":{"1399\/09\/05":[{"Time":"08:30","Status":"1"},{"Time":"08:53","Status":"1"},{"Time":"09:16","Status":"0"},{"Time":"09:39","Status":"1"},{"Time":"10:02","Status":"1"},{"Time":"10:25","Status":"1"},{"Time":"10:48","Status":"1"},{"Time":"11:11","Status":"1"},{"Time":"11:34","Status":"1"},{"Time":"11:57","Status":"1"},{"Time":"12:20","Status":"1"},{"Time":"12:43","Status":"1"},{"Time":"13:06","Status":"1"},{"Time":"13:29","Status":"1"},{"Time":"13:52","Status":"1"},{"Time":"14:15","Status":"1"},{"Time":"01:05","Status":"1"},{"Time":"01:28","Status":"1"},{"Time":"01:51","Status":"1"},{"Time":"02:14","Status":"1"},{"Time":"02:37","Status":"1"},{"Time":"03:00","Status":"1"},{"Time":"03:23","Status":"1"},{"Time":"03:46","Status":"1"},{"Time":"04:09","Status":"1"},{"Time":"04:32","Status":"1"},{"Time":"04:55","Status":"1"},{"Time":"05:18","Status":"1"},{"Time":"05:41","Status":"1"},{"Time":"06:04","Status":"1"},{"Time":"06:27","Status":"1"}],"1399\/09\/04":[{"Time":"08:30","Status":"1"},{"Time":"08:53","Status":"1"},{"Time":"09:16","Status":"1"},{"Time":"09:39","Status":"1"},{"Time":"10:02","Status":"1"},{"Time":"10:25","Status":"1"},{"Time":"10:48","Status":"0"},{"Time":"11:11","Status":"1"},{"Time":"11:34","Status":"1"},{"Time":"11:57","Status":"1"},{"Time":"12:20","Status":"1"},{"Time":"12:43","Status":"1"},{"Time":"13:06","Status":"1"},{"Time":"13:29","Status":"1"},{"Time":"13:52","Status":"1"},{"Time":"14:15","Status":"1"}]}}',
                'video' => '/uploads/Videos/alireza-nikmorad.mp4',
                'status' => '1',
                'vip' => '1',
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('advisors');
    }
}
