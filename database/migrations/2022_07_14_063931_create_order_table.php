<?php

use App\Models\CarType;
use App\Models\Client;
use App\Models\Service;
use App\Models\Zone;
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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->foreignIdFor(Client::class);
            $table->foreignIdFor(Service::class);
            $table->date('Date');
            $table->foreignIdFor(CarType::class);
            $table->foreignIdFor(Zone::class)->nullable();
            $table->string('status');
=======
            $table->string('FullName');
            $table->string('phoneNumber');
            $table->string('Service');
            $table->date('Date');
            $table->string('CarType');
            $table->string('Zone')->nullable();
            $table->string('Time');
            $table->string('Prix');
            $table->string('status')->nullable();
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
        Schema::dropIfExists('order');
    }
};
