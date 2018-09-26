<?php



use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePingOpsMainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('hullsoft_ping_ops_main', function (Blueprint $table) {            
            $table->increments('id');
            $table->dateTime('date_begin')->unique()->index();
            $table->string('system')->nullable();
            $table->string('message');
            $table->string('corp')->nullable();
            $table->string('ali')->nullable();
            $table->string('object')->nullable();
            $table->string('timing')->nullable();            
            $table->string('deviation')->nullable();
            $table->string('owner')->nullable();
            $table->string('regim')->nullable();
            $table->boolean('active')->default(true);            
            $table->string('result')->nullable();            
            
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::drop('hullsoft_ping_ops_main');
    }
}
