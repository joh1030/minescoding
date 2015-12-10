<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\UserInfo;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call(UsersTableSeeder::class);
        $this->call(UsersInfoTableSeeder::class);
        Model::reguard();
    }
}
class UsersTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();
        
	User::create(['name' => 'Cyndi Rader', 'email' => 'crader@mines.edu', 'password' => bcrypt('cyndirader')]);
	User::create(['name' => 'Jane Doe', 'email' => 'jdoe1@comcast.net', 'password' => bcrypt('doewoman')]);
	User::create(['name' => 'Mark Johnson', 'email' => 'mjohnson@comcast.net', 'password' => bcrypt('nooneknows')]);
	User::create(['name' => 'Rick Roberts', 'email' => 'rroberts@mymail.mines.edu', 'password' => bcrypt('gobroncos')]);
	User::create(['name' => 'Von Miller', 'email' => 'vmiller58@comcast.net', 'password' => bcrypt('sack58')]);
	User::create(['name' => 'Brock Osweiler', 'email' => 'brock17@comcast.net', 'password' => bcrypt('touchdown')]);
	User::create(['name' => 'Mickey Mouse', 'email' => 'mouseman@disney.com', 'password' => bcrypt('mickeymouse')]);
	User::create(['name' => 'Bill Dotreiv', 'email' => 'billdozer@koth.com', 'password' => bcrypt('dotreiv')]);
	User::create(['name' => 'Tiger Woods', 'email' => 'n1golfer@att.com', 'password' => bcrypt('tigersbest')]);
	User::create(['name' => 'Jimmy Clausen', 'email' => 'jclausen2@hotmail.com', 'password' => bcrypt('collegeqb')]);
	User::create(['name' => 'Tim Tebow', 'email' => 'gotebowgo@msn.com', 'password' => bcrypt('meme15')]);
	User::create(['name' => 'Random User', 'email' => 'whoami@random.com', 'password' => bcrypt('whoiswhat')]);
	User::create(['name' => 'Fat Albert', 'email' => 'heyheyhey@msn.com', 'password' => bcrypt('sgoinonrudy')]);
	User::create(['name' => 'Nelsen Markov', 'email' => 'nMarkov@msn.com', 'password' => bcrypt('stapler')]);
	User::create(['name' => 'Actual Student', 'email' => 'smartone@mymail.mines.edu', 'password' => bcrypt('moreschool')]);
	User::create(['name' => 'Bill Smith', 'email' => 'bsmith@hotmail.com', 'password' => bcrypt('smithman')]);
	User::create(['name' => 'Rex Ryan', 'email' => 'ryguy@hotmail.com', 'password' => bcrypt('gobills')]);
	User::create(['name' => 'Mike Williams', 'email' => 'mwilliams@msn.com', 'password' => bcrypt('whodat')]);
	User::create(['name' => 'Phil Mitchell', 'email' => 'pmitch@hotmail.com', 'password' => bcrypt('passw0rd')]);
	User::create(['name' => 'Rick Ross', 'email' => 'randr@msn.com', 'password' => bcrypt('ilikemusic'), 'type' => 'admin']);
	User::create(['name' => 'Mark Hamilton', 'email' => 'hamman@msn.com', 'password' => bcrypt('whyohwhy')]);
    }
}
class UsersInfoTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('users_info')->delete();
		
		UserInfo::create(['user_id' => '1', 'style' => 'competitive', 'lang_one' => 'C++', 'lang_two' => 'Python', 'lang_three' => 'Java', 'csci_261' => 'CSCI 261', 'csci_262' => 'CSCI 262']);
		UserInfo::create(['user_id' => '6', 'style' => 'social', 'lang_one' => 'C++', 'lang_two' => 'Python', 'lang_three' => 'Java', 'csci_261' => 'CSCI 261', 'csci_262' => 'CSCI 262']);
		UserInfo::create(['user_id' => '4', 'style' => 'social', 'lang_one' => 'C++', 'lang_two' => 'Python', 'lang_three' => 'Java', 'csci_261' => 'CSCI 261', 'csci_262' => 'CSCI 262', 'csci_306' => 'CSCI 306', 'csci_406' => 'CSCI 406']);
		UserInfo::create(['user_id' => '3', 'style' => 'social', 'lang_one' => 'Java', 'lang_two' => 'Python', 'lang_three' => 'C++', 'csci_261' => 'CSCI 261', 'csci_262' => 'CSCI 262']);
		UserInfo::create(['user_id' => '2', 'style' => 'competitive', 'lang_one' => 'Python', 'lang_two' => 'Java', 'lang_three' => 'C++', 'csci_261' => 'CSCI 261']);
		UserInfo::create(['user_id' => '5', 'style' => 'competitive', 'lang_one' => 'Java', 'lang_two' => 'Python', 'lang_three' => 'C++', 'csci_261' => 'CSCI 261', 'csci_262' => 'CSCI 262']);
		UserInfo::create(['user_id' => '7', 'style' => 'competitive', 'lang_one' => 'C++', 'lang_two' => 'Python', 'lang_three' => 'Java', 'csci_261' => 'CSCI 261', 'csci_262' => 'CSCI 262', 'csci_306' => 'CSCI 306', 'csci_406' => 'CSCI 406']);
		UserInfo::create(['user_id' => '8', 'style' => 'social', 'lang_one' => 'Java', 'lang_two' => 'Python', 'lang_three' => 'C++', 'csci_261' => 'CSCI 261']);
		UserInfo::create(['user_id' => '9', 'style' => 'social', 'lang_one' => 'C++', 'lang_two' => 'Java', 'lang_three' => 'Python', 'csci_261' => 'CSCI 261', 'csci_262' => 'CSCI 262', 'csci_306' => 'CSCI 306']);
		UserInfo::create(['user_id' => '10','style' => 'social', 'lang_one' => 'Python', 'lang_two' => 'Java', 'lang_three' => 'C++', 'csci_261' => 'CSCI 261', 'csci_262' => 'CSCI 262', 'csci_306' => 'CSCI 306']);
		UserInfo::create(['user_id' => '11', 'lang_one' => 'Python', 'lang_two' => 'Java', 'lang_three' => 'C++', 'csci_261' => 'CSCI 261', 'csci_262' => 'CSCI 262']);
		UserInfo::create(['user_id' => '12', 'lang_one' => 'C++', 'lang_two' => 'Python', 'lang_three' => 'Java', 'csci_261' => 'CSCI 261', 'csci_262' => 'CSCI 262', 'csci_306' => 'CSCI 306']);
		UserInfo::create(['user_id' => '13', 'lang_one' => 'Java', 'lang_two' => 'Python', 'lang_three' => 'C++', 'csci_261' => 'CSCI 261', 'csci_262' => 'CSCI 262']);
		UserInfo::create(['user_id' => '14', 'style' => 'competitive', 'lang_one' => 'Java', 'lang_two' => 'Python', 'lang_three' => 'C++', 'csci_261' => 'CSCI 261', 'csci_262' => 'CSCI 262', 'csci_306' => 'CSCI 306', 'csci_406' => 'CSCI 406']);
		UserInfo::create(['user_id' => '15', 'style' => 'competitive', 'lang_one' => 'Python', 'lang_two' => 'C++', 'lang_three' => 'Java', 'csci_261' => 'CSCI 261', 'csci_262' => 'CSCI 262', 'csci_306' => 'CSCI 306', 'csci_406' => 'CSCI 406']);
		UserInfo::create(['user_id' => '16', 'style' => 'competitive', 'lang_one' => 'Python', 'lang_two' => 'C++', 'lang_three' => 'Java', 'csci_261' => 'CSCI 261', 'csci_262' => 'CSCI 262', 'csci_306' => 'CSCI 306', 'csci_406' => 'CSCI 406']);
		UserInfo::create(['user_id' => '17', 'lang_one' => 'Python', 'lang_two' => 'Java', 'lang_three' => 'C++', 'csci_261' => 'CSCI 261', 'csci_262' => 'CSCI 262']);
		UserInfo::create(['user_id' => '18', 'lang_one' => 'Java', 'lang_two' => 'Python', 'lang_three' => 'C++', 'csci_261' => 'CSCI 261', 'csci_262' => 'CSCI 262', 'csci_306' => 'CSCI 306', 'csci_406' => 'CSCI 406']);
		UserInfo::create(['user_id' => '19', 'lang_one' => 'C++', 'lang_two' => 'Java', 'lang_three' => 'Python', 'csci_261' => 'CSCI 261', 'csci_262' => 'CSCI 262', 'csci_306' => 'CSCI 306']);
		UserInfo::create(['user_id' => '20', 'lang_one' => 'Python', 'lang_two' => 'C++', 'lang_three' => 'Java', 'csci_261' => 'CSCI 261', 'csci_262' => 'CSCI 262', 'csci_306' => 'CSCI 306']);
		UserInfo::create(['user_id' => '21', 'lang_one' => 'Java', 'lang_two' => 'Python', 'lang_three' => 'C++', 'csci_261' => 'CSCI 261', 'csci_262' => 'CSCI 262', 'csci_306' => 'CSCI 306']);

	}
}
