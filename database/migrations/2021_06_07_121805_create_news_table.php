<?php

use App\Models\News;
use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Faker\Factory;

class CreateNewsTable extends Migration
{
    protected $faker;

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('body');
            $table->string('img_url');
            $table->string('img_id');
            $table->boolean('published');
            $table->timestamp('published_at');
            $table->timestamps();
            $table->foreignId('user_id')
                    ->constrained()
                    ->onDelete('cascade');;
        });

        $this->faker = Factory::create();
        
        for ($i=0; $i < 5; $i++) { 
            News::insert(
                [
                    'title' => $this->faker->realText($maxNbChars = 20),
                    'body' => $this->faker->realText($maxNbChars = 1000),
                    'img' => 'https://res.cloudinary.com/dyh5iokvj/image/upload/v1623532608/sample.jpg',
                    'published' => true,
                    'user_id' => '1',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'published_at' => Carbon::now(),
                ]
            );
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
