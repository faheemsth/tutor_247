<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tutor_id')->constrained('users');
            $table->foreignId('student_id')->constrained('users');
            $table->foreignId('order_id')->constrained('orders');
            $table->foreignId('subject_id')->constrained('subjects');
            $table->date('booking');
            $table->enum('location',['Physical','Virtual']);
            $table->string('meeting_link',100);
            $table->integer('duration');
            $table->enum('status',['Scheduled','In Process','Completed','Cancelled']);
            $table->string('cnacellation_reason',255);
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
        Schema::dropIfExists('bookings');
    }
};
