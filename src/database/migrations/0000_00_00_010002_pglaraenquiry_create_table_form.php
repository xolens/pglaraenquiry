<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;

use Xolens\PgLaraenquiry\App\Util\PgLaraenquiryMigration;

class PgLaraenquiryCreateTableForm extends PgLaraenquiryMigration
{
    /**
     * Return table name
     *
     * @return string
     */
    public static function tableName(){
        return 'form';
    }    

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(self::table(), function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('description')->nullable();
            $table->integer('primary_section_id')->index();
        });
        if(self::logEnabled()){
            self::registerForLog();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(self::logEnabled()){
            self::unregisterFromLog();
        }
        Schema::dropIfExists(self::table());

    }
}
