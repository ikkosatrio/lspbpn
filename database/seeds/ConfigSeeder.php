<?php

use Illuminate\Database\Seeder;
use App\Model\Config;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Config::insert([
            'name' => 'LSP Broker Property Indonesia',
            'description' => 'desk',
        ]);
    }
}
