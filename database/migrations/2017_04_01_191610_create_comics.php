<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComics extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    if (Schema::hasTable('comics')) {
      $this->backup();
      $this->down();
    }
    echo "Creating a new comics table".PHP_EOL;
    Schema::create('comics', function (Blueprint $table) {
        $table->increments('id');
        $table->string('comic_url', 250);
        $table->string('comic_name', 100);
        $table->smallInteger('category_id')->default(0);
    });
    echo "Don't forget to seed your comics table.  An example seeder is stored under database/seeds, but you'll need to create your own for autoloading purposes"
    . "or you can add 'ComicsTableSeeder' => $baseDir . '/database/seeds/ComicsTableSeeder.php' to your vendor/composer/autoload_classmap.php file".PHP_EOL;
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    if (Schema::hasTable('comics')) {
          Schema::drop('comics');
    }        
  }
  
  private function backup(){
    if (Schema::hasTable('comics_bkp')) {
        echo "Dropping the current comics_bkp table".PHP_EOL;
        Schema::drop('comics');
    }        
    echo "Creating a new comics_bkp table".PHP_EOL;
    Schema::create('comics_bkp', function (Blueprint $table) {
        $table->increments('id');
        $table->string('comic_url', 250);
        $table->string('comic_name', 100);
        $table->smallInteger('category_id')->default(0);
    });
    $db = DB::connection();
    $sql = "INSERT IGNORE INTO comics_bkp SELECT * FROM comics"; 
    $db->statement($sql);
  }
}
