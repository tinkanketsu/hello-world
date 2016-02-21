<?php
use Flynsarmy\CsvSeeder\CsvSeeder;

class ShopTableSeeder extends CsvSeeder
{
	public function __construct()
	{
		$this->table = 'shops';
		$this->filename = base_path().'/database/seeds/csv/Shop.csv';
		$this->offset_rows = 1;
		$this->mapping = [
			0 => 'name',
			1 => 'access',
			2 => 'address',
			3 => 'short_description',
			4 => 'business_hours', 
			5 => 'telephone',
			6 => 'seat_counts',
			7 => 'stylist_counts',
			8 => 'latitude',
			9 => 'longitude'
		];
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
