<?php
use Flynsarmy\CsvSeeder\CsvSeeder;

class ShopTableSeeder extends CsvSeeder
{
	public function __construct(\App\Service\AuthService $auth)
	{

        $this->auth = $auth;

        // 
        // $this->auth->registerUserメソッドを使ってユーザを追加してください。

	}

	public function run()
	{
        $this->command->info('ShopTableSeeder called.');

        // Recommended when importing larger CSVs
        DB::disableQueryLog();

        // Uncomment the below to wipe the table clean before populating
        DB::table($this->table)->truncate();
        

        parent::run();
        
        $this->command->info('finished.');
    }
}
