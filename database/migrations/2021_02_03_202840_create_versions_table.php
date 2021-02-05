<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVersionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('versions', function (Blueprint $table) {
            $table->id();
            $table->integer('project_id');
            $table->string('name');
            $table->tinyInteger('status')->default(0)->comment('0:進行中 1:ロック中 2:終了');
            $table->tinyInteger('type')->default(1)->comment('0:バックログ 1:スプリント');
            $table->integer('point')->default(0)->comment('ポイント数');
            $table->date('start_date')->nullable()->comment('スプリント開始日');
            $table->date('end_date')->nullable()->comment('スプリント終了日');
            $table->boolean('enabled')->default(true)->comment('有効フラグ');
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
        Schema::dropIfExists('versions');
    }
}
