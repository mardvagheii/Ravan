<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateHomePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_pages', function (Blueprint $table) {
            $table->id();
            $table->text('services')->nullable();
            $table->text('guidences')->nullable();
            $table->text('footer')->nullable();
            $table->timestamps();
        });
        DB::table('home_pages')->insert([
            [
                'services' => '[{"title":"\u0645\u0634\u0627\u0648\u0631\u0647 \u0631\u0648\u0627\u0646\u0634\u0646\u0627\u0633\u06cc","short_desc":"\u067e\u06cc\u0634 \u0627\u0632 \u0627\u0632\u062f\u0648\u0627\u062c\u060c \u0645\u0633\u0627\u0626\u0644 \u062c\u0646\u0633\u06cc\u060c \u0627\u0639\u062a\u0645\u0627\u062f \u0628\u0647 \u0646\u0641\u0633 \u0648...","link":"ConsultantList"},{"title":"\u062a\u0633\u062a \u0631\u0648\u0627\u0646\u0634\u0646\u0627\u0633\u06cc","short_desc":"\u062a\u0633\u062a \u0631\u0648\u0627\u0646\u0634\u0646\u0627\u0633\u06cc \u0648 \u0631\u0648\u0627\u0646\u0633\u0646\u062c\u06cc\u060c \u062a\u0633\u062a \u0634\u062e\u0635\u06cc\u062a \u0634\u0646\u0627\u0633\u06cc...","link":null},{"title":"\u0631\u0632\u0631\u0648 \u0648\u0642\u062a \u062d\u0636\u0648\u0631\u06cc","short_desc":null,"link":null},{"title":"\u0641\u0631\u0648\u0634\u06af\u0627\u0647","short_desc":null,"link":null},{"title":"\u062f\u0631\u062e\u0648\u0627\u0633\u062a \u0645\u062a\u062e\u0635\u0635\u0627\u0646","short_desc":null,"link":"Assist"}]',
                'guidences' => '[{"title":"\u0645\u0634\u0627\u0648\u0631\u0647 \u0627\u0632 \u06af\u0630\u0634\u062a\u0647 \u062a\u0627 \u0628\u0647 \u0627\u0645\u0631\u0648\u0632","description":"\u0627\u0633\u0645 \u0645\u0634\u0627\u0648\u0631\u0647 \u06a9\u0647 \u0645\u06cc \u0622\u06cc\u062f\u060c \u062f\u0631 \u062e\u0627\u0637\u0631\u0645\u0627\u0646 \u062c\u0627\u06cc\u06cc \u0634\u0628\u06cc\u0647 \u0645\u0637\u0628 \u067e\u0632\u0634\u06a9 \u0645\u06cc \u0622\u06cc\u062f. \u0648\u0642\u062a \u06af\u0631\u0641\u062a\u0646 \u062a\u0644\u0641\u0646\u06cc \u0648\u0633\u0627\u0639\u062a\u0647\u0627\r\n\u062f\u0631 \u0645\u0633\u06cc\u0631 \u0645\u0627\u0646\u062f\u0646 \u0628\u0631\u0627\u06cc \u0645\u0634\u0627\u0648\u0631\u0647 \u06af\u0631\u0641\u062a\u0646. \u0622\u0646 \u0631\u0648\u0632\u0647\u0627 \u0627\u06af\u0631 \u06a9\u0633\u06cc \u0627\u0632 \u0645\u0634\u0627\u0648\u0631\u0647 \u0622\u0646\u0644\u0627\u06cc\u0646 \u062d\u0631\u0641 \u0645\u06cc\u0632\u062f\u060c \u0628\u0627 \u062a\u0639\u062c\u0628\r\n\u0646\u06af\u0627\u0647\u0634 \u0645\u06cc\u06a9\u0631\u062f\u06cc\u0645 \u06a9\u0647 \u0645\u06af\u0631 \u0645\u0645\u06a9\u0646 \u0627\u0633\u062a \u062f\u0631 \u062e\u0627\u0646\u0647\r\n\u0628\u0634\u06cc\u0646\u06cc\u0645 \u0648 \u062c\u0644\u0633\u0647 \u0645\u0634\u0627\u0648\u0631\u0647 \u0628\u0627 \u0645\u0634\u0627\u0648\u0631\u06cc \u062e\u0648\u0628 \u062f\u0627\u0634\u062a\u0647 \u0628\u0627\u0634\u06cc\u0645. \u0627\u0645\u0631\u0648\u0632 \u0627\u0645\u0627 \u0628\u0627 \u06af\u0633\u062a\u0631\u0634 \u062a\u06a9\u0646\u0648\u0644\u0648\u0698\u06cc\u060c \u0645\u0634\u0627\u0648\u0631\u0647\r\n \u0622\u0646\u0644\u0627\u06cc\u0646\u060c \u0627\u0645\u0631\u06cc \u0639\u0627\u062f\u06cc \u0634\u062f\u0647 \u0627\u0633\u062a \u0648 \u0645\u06cc \u062a\u0648\u0627\u0646 \u0628\u0627 \u0627\u0633\u062a\u0641\u0627\u062f\u0647 \u0627\u0632 \u062e\u062f\u0645\u0627\u062a \u0622\u0646\u060c \u0633\u0644\u0627\u0645\u062a \u0631\u0648\u0627\u0646 \u062e\u0648\u062f \u0631\u0627 \u062a\u0636\u0645\u06cc\u0646\r\n\u06a9\u0631\u062f."},{"title":"l\u0645\u0632\u0627\u06cc\u0627\u06cc \u0645\u0634\u0627\u0648\u0631\u0647 \u0622\u0646\u0644\u0627\u06cc\u0646\u060c \u062a\u0635\u0645\u06cc\u0645\u06cc \u0627\u0642\u062a\u0635\u0627\u062f\u06cc \u0648 \u0647\u0648\u0634\u0645\u0646\u062f\u0627\u0646\u0647","description":"\u062f\u0631 \u0633\u0627\u0644\u0647\u0627\u06cc \u0627\u062e\u06cc\u0631\u060c \u06af\u0633\u062a\u0631\u0634 \u062a\u06a9\u0646\u0648\u0644\u0648\u0698\u06cc \u0627\u0632 \u0637\u0631\u0641\u06cc \u0632\u0646\u062f\u06af\u06cc \u0631\u0627 \u0622\u0633\u0627\u0646 \u062a\u0631\u0648 \u0627\u0632 \u0637\u0631\u0641\u06cc \u0633\u0631\u0639\u062a \u06a9\u0627\u0631\u0647\u0627 \u0631\u0627 \u0628\u0627\u0644\u0627\r\n\u0628\u0631\u062f\u0647 \u0627\u0633\u062a. \u06af\u0627\u0647\u06cc \u0622\u0646\u0686\u0646\u0627\u0646 \u063a\u0631\u0642 \u0633\u0631\u0639\u062a \u0632\u0646\u062f\u06af\u06cc \u0645\u06cc \u0634\u0648\u06cc\u0645 \u06a9\u0647 \u062d\u062a\u06cc \u0646\u0645\u06cc \u062a\u0648\u0627\u0646\u06cc\u0645 \u062c\u0627\u06cc\u06cc \u0628\u0631\u0627\u06cc \u0645\u0631\u0627\u062c\u0639\u0647 \u0628\u0647\r\n\u067e\u0632\u0634\u06a9 \u0648 \u0631\u0648\u0627\u0646\u0634\u0646\u0627\u0633 \u0628\u0627\u0632 \u06a9\u0646\u06cc\u0645. \u0628\u0627 \u062a\u0648\u062c\u0647 \u0628\u0647\r\n\u06af\u0631\u0627\u0646\u06cc \u0647\u0627\u06cc \u0645\u0648\u062c\u0648\u062f \u0647\u0645\u060c \u06af\u0627\u0647\u0627 \u0627\u06af\u0631 \u0627\u0632 \u0644\u062d\u0627\u0638 \u0632\u0645\u0627\u0646\u06cc \u062a\u0648\u0627\u0646\u0627\u06cc\u06cc \u062f\u0627\u0634\u062a\u0647 \u0628\u0627\u0634\u06cc\u0645\u060c \u0628\u0647 \u0639\u062f\u062f\u0647\u0627\u06cc \u067e\u0631\u062f\u0627\u062e\u062a\u06cc \u06a9\u0647\r\n\u0645\u06cc \u0631\u0633\u06cc\u0645\u060c \u0642\u06cc\u062f\u0634 \u0631\u0627 \u0645\u06cc \u0632\u0646\u06cc\u0645. \u0645\u0634\u0627\u0648\u0631\u0647 \u0622\u0646\u0644\u0627\u06cc\u0646 \u0686\u0627\u0631\u0647 \u0627\u06cc\u0646 \u0645\u0634\u06a9\u0644\u0627\u062a \u0627\u0633\u062a. \u0634\u0627\u06cc\u062f \u062a\u0646\u0647\u0627 \u0645\u0632\u06cc\u062a \u0642\u06cc\u0645\u062a\r\n\u0645\u0646\u0627\u0633\u0628 \u0648\u06cc\u0632\u06cc\u062a \u0631\u0648\u0627\u0646\u0634\u0646\u0627\u0633 \u0628\u0647 \u0646\u0638\u0631 \u0628\u06cc\u0627\u06cc\u062f. \u0627\u0645\u0627 \u0622\u06cc\u0627\r\n\u0645\u06cc \u062f\u0627\u0646\u0633\u062a\u06cc\u062f \u0686\u0637\u0648\u0631 \u0645\u06cc\u062a\u0648\u0627\u0646\u06cc\u062f \u0628\u0627 \u0628\u0647\u0631\u0647 \u0645\u0646\u062f\u06cc \u0627\u0632 \u062e\u062f\u0645\u0627\u062a \u0622\u0646\u0644\u0627\u06cc\u0646\u060c \u0635\u0631\u0641\u0647 \u062c\u0648\u06cc\u06cc \u0686\u0646\u062f \u062c\u0627\u0646\u0628\u0647 \u0648\r\n\u0647\u0648\u0634\u0645\u0646\u062f\u0627\u0646\u0647 \u06a9\u0646\u06cc\u062f\u061f \u0628\u0627 \u062a\u0648\u062c\u0647 \u0628\u0647 \u0648\u0633\u0639\u062a \u0634\u0647\u0631\u0647\u0627\u06cc \u0628\u0632\u0631\u06af \u0648 \u0645\u0639\u0638\u0644\u06cc \u0628\u0647 \u0646\u0627\u0645 \u062a\u0631\u0627\u0641\u06cc\u06a9\u060c \u0632\u0645\u0627\u0646\u06cc \u06a9\u0647 \u0647\u0645\u0647 \u062a\u0644\u0627\u0634\r\n\u062e\u0648\u062f \u0631\u0627 \u06a9\u0631\u062f\u0647 \u0627\u06cc\u062f \u0648 \u0645\u0634\u0627\u0648\u0631 \u062e\u0648\u0628\u06cc \u067e\u06cc\u062f\u0627 \u06a9\u0631\u062f\u0647 \u0627\u06cc\u062f\u060c\r\n\u0628\u0627\u06cc\u062f \u062d\u062f\u0627\u0642\u0644 4 \u0633\u0627\u0639\u062a \u0648\u0642\u062a \u062e\u0648\u062f \u0631\u0627 \u062f\u0631 \u0645\u0633\u06cc\u0631 \u0628\u06af\u0630\u0631\u0627\u0646\u06cc\u062f. \u06a9\u0627\u0641\u06cc \u0627\u0633\u062a \u0645\u0633\u0626\u0648\u0644\u06cc\u062a\u06cc \u0634\u0628\u06cc\u0647 \u0641\u0631\u0632\u0646\u062f \u062f\u0627\u0631\u06cc \u0647\u0645\r\n\u062f\u0627\u0634\u062a\u0647 \u0628\u0627\u0634\u06cc\u062f. \u0647\u0645\u0647 \u0627\u06cc\u0646 \u0686\u0627\u0644\u0634\u0647\u0627 \u0634\u0645\u0627 \u0631\u0627 \u0627\u0632 \u0645\u0633\u06cc\u0631 \u062f\u0648\u0631 \u0645\u06cc \u06a9\u0646\u062f. \u0628\u0627 \u0645\u0634\u0627\u0648\u0631\u0647 \u0622\u0646\u0644\u0627\u06cc\u0646 \u062a\u0646\u0647\u0627 \u0628\u0647 \u0627\u062a\u0627\u0642\r\n\u0627\u0645\u0646 \u062e\u0648\u062f \u0627\u062d\u062a\u06cc\u0627\u062c \u062f\u0627\u0631\u06cc\u062f\u060c \u0645\u06cc \u062a\u0648\u0627\u0646\u06cc\u062f \u062f\u0631 \u062e\u0627\u0646\u0647\r\n\u0628\u0645\u0627\u0646\u06cc\u062f\u060c \u062f\u0631 \u0639\u06cc\u0646 \u0631\u0633\u06cc\u062f\u06af\u06cc \u0628\u0647 \u0627\u0645\u0648\u0631 \u0634\u062e\u0635\u06cc\u060c \u0627\u0632 \u0628\u0647\u062a\u0631\u06cc\u0646 \u0645\u0634\u0627\u0648\u0631 \u0648 \u0631\u0648\u0627\u0646\u0634\u0646\u0627\u0633 \u0645\u0634\u0627\u0648\u0631\u0647 \u0628\u06af\u06cc\u0631\u06cc\u062f. \u062d\u062a\u0645\u0627\r\n\u062a\u0627 \u0628\u0647 \u0627\u0644\u0622\u0646 \u062d\u062f\u0633 \u0632\u062f\u0647 \u0627\u06cc\u062f\u060c \u067e\u0633 \u0627\u0632 \u0645\u0642\u0627\u06cc\u0633\u0647 \u0642\u06cc\u0645\u062a \u0648\u06cc\u0632\u06cc\u062a \u0622\u0646\u0644\u0627\u06cc\u0646 \u0648 \u0622\u0641\u0644\u0627\u06cc\u0646 \u0628\u0647 \u0627\u06cc\u0646 \u0646\u062a\u06cc\u062c\u0647 \u0645\u06cc \u0631\u0633\u06cc\u062f\r\n\u06a9\u0647 \u06a9\u0627\u0634 \u0632\u0648\u062f\u062a\u0631 \u062f\u0633\u062a \u0628\u0647 \u0627\u0646\u062a\u062e\u0627\u0628 \u0632\u062f\u0647 \u0628\u0648\u062f\u06cc\u062f.\r\n\u062f\u0648\u0633\u062a \u0646\u062f\u0627\u0631\u06cc\u062f \u0628\u0647 \u0647\u0631 \u062f\u0644\u06cc\u0644\u06cc \u0647\u0648\u06cc\u062a \u062a\u0627\u0646 \u0641\u0627\u0634 \u0634\u0648\u062f\u061f \u0645\u0634\u0627\u0648\u0631\u0647 \u0622\u0646\u0644\u0627\u06cc\u0646 \u0627\u0632 \u067e\u0633 \u0627\u06cc\u0646 \u0645\u0634\u06a9\u0644 \u0647\u0645 \u0628\u0631\u0622\u0645\u062f\u0647\u060c\r\n\u062a\u0646\u0647\u0627 \u0631\u0648\u0634 \u0634\u0646\u0627\u0633\u0627\u06cc\u06cc \u0634\u0645\u0627\u060c \u06cc\u06a9 \u06a9\u062f \u0627\u0633\u062a. \u0628\u06cc \u0647\u06cc\u0686 \u0646\u0627\u0645 \u0645\u0634\u062e\u0635\u06cc \u0645\u06cc \u062a\u0648\u0627\u0646\u06cc\u062f \u0645\u0634\u0627\u0648\u0631\u0647 \u0628\u06af\u06cc\u0631\u06cc\u062f."},{"title":"\u0642\u0627\u0628\u0644 \u0631\u0632\u0631\u0648 \u0628\u0648\u062f\u0646 \u062c\u0644\u0633\u0627\u062a \u0645\u0634\u0627\u0648\u0631\u0647 \u0622\u0646\u0644\u0627\u06cc\u0646","description":"\u0645\u0645\u06a9\u0646 \u0627\u0633\u062a \u062f\u0631 \u0627\u06cc\u0646 \u0644\u062d\u0638\u0647 \u0627\u0645\u06a9\u0627\u0646 \u0628\u0631\u0642\u0631\u0627\u0631\u06cc \u0627\u0631\u062a\u0628\u0627\u0637 \u0628\u0627 \u0645\u0634\u0627\u0648\u0631 \u0631\u0627 \u0646\u062f\u0627\u0634\u062a\u0647 \u0628\u0627\u0634\u06cc\u062f \u0648 \u0628\u0627 \u062a\u0648\u062c\u0647 \u0628\u0647\r\n\u0628\u0631\u0646\u0627\u0645\u0647 \u0631\u06cc\u0632\u06cc \u062a\u0627\u0646 \u0628\u062f\u0627\u0646\u06cc\u062f \u06a9\u0647 \u062f\u0631 \u0641\u0644\u0627\u0646 \u0631\u0648\u0632 \u0648 \u0641\u0644\u0627\u0646 \u0633\u0627\u0639\u062a \u0645\u06cc \u062a\u0648\u0627\u0646\u06cc\u062f \u062c\u0644\u0633\u0647 \u062e\u0648\u062f \u0631\u0627 \u062f\u0627\u0634\u062a\u0647 \u0628\u0627\u0634\u06cc\u062f.\r\n\u0628\u0631\u0627\u06cc \u0631\u0632\u0631\u0648 \u062c\u0644\u0633\u0647 \u0645\u0634\u0627\u0648\u0631\u0647 \u0627\u0646\u0644\u0627\u06cc\u0646 \u062a\u0646\u0647\u0627 \u06a9\u0627\u0641\u06cc \u0627\u0633\u062a\u060c\r\n\u0627\u067e\u0644\u06cc\u06a9\u06cc\u0634\u0646 \u0645\u0634\u0627\u0648\u0631\u0647 \u0648 \u0631\u0648\u0627\u0646\u0634\u0646\u0627\u0633\u06cc \u0622\u0646\u0644\u0627\u06cc\u0646 \u0645\u0634\u0648\u0631\u064e\u067e \u0631\u0627 \u0628\u0627\u0632 \u0648 \u062f\u06a9\u0645\u0647 \u0631\u0632\u0631\u0648 \u062c\u0644\u0633\u0647 \u0631\u0627 \u067e\u06cc\u062f\u0627 \u06a9\u0646\u06cc\u062f."},{"title":"\u0645\u0634\u0627\u0648\u0631\u0647 \u0622\u0646\u0644\u0627\u06cc\u0646 \u06a9\u06cc\u0641\u06cc\u062a\u06cc \u0628\u0631\u0627\u0628\u0631 \u0628\u0627 \u0645\u0634\u0627\u0648\u0631\u0647 \u062d\u0636\u0648\u0631\u06cc","description":"\u0628\u0627 \u062a\u0648\u062c\u0647 \u0628\u0647 \u0633\u0627\u0628\u0642\u0647 \u06a9\u0645\u062a\u0631 \u0645\u0634\u0627\u0648\u0631\u0647 \u0622\u0646\u0644\u0627\u06cc\u0646 \u062f\u0631 \u0645\u0642\u0627\u06cc\u0633\u0647 \u0628\u0627 \u0645\u0634\u0627\u0648\u0631\u0647 \u062d\u0636\u0648\u0631\u06cc\u060c \u0645\u0645\u06a9\u0646 \u0627\u0633\u062a \u062f\u0631\u0628\u0627\u0631\u0647 \u06a9\u06cc\u0641\u06cc\u062a\r\n\u0627\u06cc\u0646 \u0646\u0648\u0639 \u0645\u0634\u0627\u0648\u0631\u0647 \u0645\u0631\u062f\u062f \u0628\u0627\u0634\u06cc\u062f. \u062d\u0642 \u062f\u0627\u0631\u06cc\u062f! \u0627\u06cc\u0646 \u0648\u0638\u06cc\u0641\u0647 \u0645\u0627 \u0627\u0631\u0627\u0626\u0647 \u062f\u0647\u0646\u062f\u06af\u0627\u0646 \u0645\u0634\u0627\u0648\u0631\u0647 \u0622\u0646\u0644\u0627\u06cc\u0646 \u0627\u0633\u062a \u06a9\u0647\r\n\u0627\u06cc\u0646 \u0627\u0637\u0645\u06cc\u0646\u0627\u0646 \u062e\u0627\u0637\u0631 \u0631\u0627 \u0628\u0631\u0627\u06cc \u0634\u0645\u0627 \u0641\u0631\u0627\u0647\u0645\r\n\u06a9\u0646\u06cc\u0645. \u062a\u06cc\u0645 \u0645\u0634\u0627\u0648\u0631\u0627\u0646 \u0648 \u0631\u0648\u0627\u0646\u0634\u0646\u0627\u0633\u0627\u0646 \u0645\u0634\u0648\u0631\u064e\u067e\u060c \u067e\u0633 \u0627\u0632 \u0627\u0646\u062c\u0627\u0645 \u0645\u0635\u0627\u062d\u0628\u0647 \u0647\u0627\u06cc \u062a\u062e\u0635\u0635\u06cc \u0627\u0646\u062a\u062e\u0627\u0628 \u0645\u06cc \u0634\u0648\u0646\u062f.\r\n\u0627\u06cc\u0646 \u0645\u0635\u0627\u062d\u0628\u0647 \u0647\u0627\u06cc \u0639\u0644\u0645\u06cc\u060c \u0633\u0637\u0648\u062d \u0645\u062e\u062a\u0644\u0641\u06cc \u062f\u0627\u0631\u062f \u0648 \u0645\u0634\u0627\u0648\u0631 \u0645\u0648\u0631\u062f \u0646\u0638\u0631 \u067e\u0633 \u0627\u0632 \u06af\u0630\u0631\u0627\u0646\u062f\u0646 \u0627\u06cc\u0646 \u0645\u0635\u0627\u062d\u0628\u0647 \u0647\u0627\r\n\u0648\u0627\u0631\u062f \u0641\u0631\u0622\u06cc\u0646\u062f \u0645\u0634\u0627\u0648\u0631\u0647 \u0645\u06cc \u0634\u0648\u062f. \u0630\u06a9\u0631 \u0627\u06cc\u0646 \u0646\u06a9\u062a\u0647\r\n\u062e\u0627\u0644\u06cc \u0627\u0632 \u0644\u0637\u0641 \u0646\u06cc\u0633\u062a\u060c \u06a9\u0647 \u062f\u0631 \u0627\u062f\u0627\u0645\u0647 \u0631\u0648\u0646\u062f \u06a9\u0627\u0631 \u0645\u0634\u0627\u0648\u0631\u0627\u0646\u060c \u0645\u0634\u0627\u0648\u0631\u0627\u0646 \u0627\u0631\u0634\u062f\u060c \u0628\u0647 \u0635\u0648\u0631\u062a \u0645\u0633\u062a\u0645\u0631 \u0639\u0645\u0644\u06a9\u0631\u062f\r\n\u0645\u0634\u0627\u0648\u0631\u0627\u0646 \u0631\u0627 \u0628\u0631\u0631\u0633\u06cc \u0648 \u062f\u0631 \u0635\u0648\u0631\u062a \u0646\u06cc\u0627\u0632 \u0622\u0645\u0648\u0632\u0634\u0647\u0627\u06cc \u0645\u062d\u062a\u0644\u0641 \u0631\u0627 \u0628\u0647 \u0627\u06cc\u0634\u0627\u0646 \u0627\u0631\u0627\u0626\u0647 \u0645\u06cc \u06a9\u0646\u0646\u062f. \u0639\u0644\u0627\u0648\u0647 \u0628\u0631\r\n\u0627\u06cc\u0646\u060c \u06a9\u0627\u0631\u0628\u0631\u0627\u0646 \u0645\u062d\u062a\u0631\u0645\u060c \u067e\u0633 \u0627\u0632 \u062c\u0644\u0633\u0647 \u0645\u0634\u0627\u0648\u0631\u0647 \u060c \u0645\u06cc\r\n\u062a\u0648\u0627\u0646\u0646\u062f \u0645\u06cc\u0632\u0627\u0646 \u0631\u0636\u0627\u06cc\u062a \u062e\u0648\u062f \u0631\u0627 \u0627\u0632 \u062c\u0644\u0633\u0647 \u0645\u0634\u0627\u0648\u0631\u0647 \u0628\u0627 \u062f\u0627\u062f\u0646 \u0627\u0645\u062a\u06cc\u0627\u0632 \u0627\u0639\u0644\u0627\u0645 \u06a9\u0646\u0646\u062f. \u0634\u0645\u0627 \u0628\u0627 \u0628\u0627\u0632\u0628\u06cc\u0646\u06cc\r\n\u0646\u0645\u0631\u0627\u062a \u0647\u0631 \u0645\u0634\u0627\u0648\u0631 \u0645\u06cc \u062a\u0648\u0627\u0646\u06cc\u062f \u0627\u0646\u062a\u062e\u0627\u0628 \u0647\u0648\u0634\u0645\u0646\u062f\u0627\u0646\u0647 \u062a\u0631\u06cc \u062f\u0627\u0634\u062a\u0647 \u0628\u0627\u0634\u06cc\u062f."}]',
                'footer' => '{"trust":{"items":{"0":{"trust_image":"uploads\/FooterTrustImage\/\/1605003126namad1.jpg"},"104":{"trust_image":"uploads\/FooterTrustImage\/\/1605003126namad2.jpg"},"105":{"trust_image":"uploads\/FooterTrustImage\/\/1605003126namad3.jpg"}},"detail":"\u0627\u067e\u0644\u06cc\u06a9\u06cc\u0634\u0646 \u0645\u0634\u0627\u0648\u0631\u0647 \u0622\u0646\u0644\u0627\u06cc\u0646 \u0645\u0634\u0627\u0648\u0631 \u0645\u0646 \u0628\u0627 \u0628\u0647\u0631\u0647 \u06af\u06cc\u0631\u06cc \u0627\u0632 \u0645\u062a\u062e\u0635\u0635\u0627\u0646 \u0645\u062c\u0631\u0628 \u0628\u0633\u062a\u0631\u06cc \u0631\u0627 \u0641\u0631\u0627\u0647\u0645 \u0646\u0645\u0648\u062f\u0647 \u062a\u0627 \u0647\u0645\u0648\u0637\u0646\u0627\u0646 \u0627\u06cc\u0631\u0627\u0646\u06cc \u062f\u0631 \u062f\u0627\u062e\u0644 \u0648 \u062e\u0627\u0631\u062c \u0627\u0632 \u06a9\u0634\u0648\u0631 \u0628\u0647 \u0631\u0627\u062d\u062a\u06cc \u062a\u0646\u0647\u0627 \u0628\u0627 \u0627\u0633\u062a\u0641\u0627\u062f\u0647 \u0627\u0632 \u06cc\u06a9 \u06af\u0648\u0634\u06cc \u0647\u0648\u0634\u0645\u0646\u062f \u0648 \u0628\u0647 \u0637\u0648\u0631 \u0646\u0627\u0634\u0646\u0627\u0633 \u0648 \u0628\u0627 \u0647\u0632\u06cc\u0646\u0647 \u0627\u06cc \u0645\u0646\u0627\u0633\u0628 \u062f\u0631 \u0627\u0633\u0631\u0639 \u0648\u0642\u062a \u0628\u062a\u0648\u0627\u0646\u0646\u062f \u0645\u0634\u0627\u0648\u0631\u0647 \u0622\u0646\u0644\u0627\u06cc\u0646 \u062f\u0627\u0634\u062a\u0647 \u0628\u0627\u0634\u0646\u062f \u0648 \u0645\u0634\u06a9\u0644 \u062e\u0648\u062f\u0631\u0627 \u062d\u0644 \u0646\u0645\u0627\u06cc\u0646\u062f."},"social_media":{"0":{"social_media_image":"uploads\/FooterSocialMediaImage\/\/1605000426instagrampng.png"},"100":{"social_media_image":"uploads\/FooterSocialMediaImage\/\/1605000427linkdinpng.png"},"101":{"social_media_image":"uploads\/FooterSocialMediaImage\/\/1605160832aparat.png"},"102":{"social_media_image":"uploads\/FooterSocialMediaImage\/\/1605000427instagrampng.png"}}}',
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
        Schema::dropIfExists('home_pages');
    }
}
