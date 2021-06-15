<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDefibsTable extends Migration
{
    public function up(): void
    {
        Schema::create('defibs', function (Blueprint $table) {
            $table->id();
            $table->string('location');
            $table->string('model');
            $table->string('serial')->nullable();
            $table->string('owner')->default('RathdrumCFR');
            $table->string('last_inspected_by')->nullable();
            $table->timestamp('last_inspected_at')->nullable();
            $table->timestamp('last_serviced_at')->nullable();
            $table->timestamp('pads_expire_at')->nullable();
            $table->timestamps();
        });
    }
}
