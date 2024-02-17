<?php 

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRoleAndIsBannedToUsersTable extends Migration
{

    public function up()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->string('role');
            $table->boolean('is_banned');

        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
        
            $table->dropColumn('role');
            $table->dropColumn('is_banned');

        });
    }

}