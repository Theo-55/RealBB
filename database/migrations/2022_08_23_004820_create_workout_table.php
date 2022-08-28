<?php

use App\Models\Exercise;
use App\Models\User;
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
        Schema::create('workouts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('date');
            $table->String('muscle_group');
            $table->String('duration_hrs');
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Exercise::class);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workout');
    }
};
