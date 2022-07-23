<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DefaultSeeder extends Seeder
{
    public function run()
    {
        $this->call('MsUserSeeder');
        $this->call('MsGroupSeeder');
        $this->call('MsCategoryMenuSeeder');
        $this->call('MsMenuSeeder');
        $this->call('GroupUserSeeder');
        $this->call('GroupMenuSeeder');
    }
}
