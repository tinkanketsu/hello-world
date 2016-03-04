<?php
use Flynsarmy\CsvSeeder\CsvSeeder;

class UserTableSeeder extends CsvSeeder
{
	public function __construct(\App\Service\AuthService $auth)
	{

        $this->auth = $auth;

		$this->table = 'users';
		$this->hashable = '';	// ここではhash化しない
		$this->filename = base_path().'/database/seeds/csv/User.csv';
		$this->offset_rows = 1;
		$this->mapping = [
			0 => 'name',
			1 => 'email',
			2 => 'password',
		];
	}

	public function run()
	{
        $this->command->info('UserTableSeeder called.');

        // Recommended when importing larger CSVs
        DB::disableQueryLog();

        // Uncomment the below to wipe the table clean before populating
        DB::table($this->table)->truncate();
        
        parent::run();
        
        $this->command->info('finished.');
    }
    
    /**
     * override
     * Seed a given set of data to the DB
     *
     * @param array $seedData
     * @return bool   TRUE on success else FALSE
     */
	public function insert( array $seedData )
	{
		foreach($seedData as $user)
		{
			try {
				$this->auth->registerUser($user['name'], $user['email'], $user['password']);
			} catch (\Exception $e) {
				$this->command->info("CSV insert failed: " . $e->getMessage() . " - CSV " . $this->filename);
    	        Log::error("CSV insert failed: " . $e->getMessage() . " - CSV " . $this->filename);
        	    return FALSE;
			}
		}

        return TRUE;
	}
}
