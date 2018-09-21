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
            $table->increments('id')->primary();                        
            $table->string('system');
            $table->string('corp');
            $table->string('ali');
            $table->string('object_code')->unique();
            $table->string('object');
            $table->string('timing');            
            $table->string('deviation');
            $table->string('owner');
            $table->boolean('active')->default(true);
            $table->boolean('close')->default(false);
            $table->string('message');
            $table->string('result');            
            
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
