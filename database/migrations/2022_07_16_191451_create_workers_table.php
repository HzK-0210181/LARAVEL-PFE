<?php

<<<<<<< HEAD
use App\Models\Group;
=======
>>>>>>> 2c1d119 (laravel backend api)
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
        Schema::create('workers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
<<<<<<< HEAD
            $table->foreignIdFor(Group::class)->nullable();
=======
>>>>>>> 2c1d119 (laravel backend api)
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
        Schema::dropIfExists('workers');
    }
};
