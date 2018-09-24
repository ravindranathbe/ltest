<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FieldsAttrUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \DB::statement('ALTER TABLE `users` MODIFY `name` VARCHAR(100) NULL AFTER `id`;');
        \DB::statement('ALTER TABLE `users` MODIFY `first_name` VARCHAR(100) NULL AFTER `name`;');
        \DB::statement('ALTER TABLE `users` MODIFY `last_name` VARCHAR(100) NULL AFTER `first_name`;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
