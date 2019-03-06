<?php


use App\Imports\GuestImport;
use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;

class ImportInviteListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Excel::import(new GuestImport(), storage_path('imports/GuestList-5-4-2019.csv'));
    }
}
