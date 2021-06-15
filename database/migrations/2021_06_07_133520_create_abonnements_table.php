<?php

use App\Models\Abonnement;
use Config\information;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbonnementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abonnements', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('description');
            $table->float('price');
            $table->string('category');
            $table->string('stripe_id');
            $table->timestamps();
        });

        $defaultServices = information::defaultServices();
        for ($i=0; $i < 5; $i++) { 
            Abonnement::insert([
                $defaultServices[$i]
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abonnements');
    }
}
