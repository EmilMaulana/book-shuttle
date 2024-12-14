<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('biodatas', function (Blueprint $table) {
            $table->foreignId('status_id')->nullable()->constrained('statuses')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::table('biodatas', function (Blueprint $table) {
            $table->dropForeign(['status_id']);
            $table->dropColumn('status_id');
        });
    }

};
