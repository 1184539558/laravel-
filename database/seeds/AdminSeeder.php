<?php

use Illuminate\Database\Seeder;
use App\Models\Admin;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::truncate();
        Factory(Admin::class,10)->create();
        Admin::where('id',6)->update(['username'=>'admin']);
    }
}
