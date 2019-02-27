<?php

use Illuminate\Database\Seeder;

class ImportInviteListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // TODO - family members
        $guests = [
            [
                'first_name' => 'Pam',
                'last_name' => 'Falotico',
                'allowed_guest' => false,
                'allowed_rehearsal_dinner' => true,

            ],
            [
                'first_name' => 'Jim',
                'last_name' => 'Falotico',
                'allowed_guest' => false,
                'allowed_rehearsal_dinner' => true,

            ],
            [
                'first_name' => 'Kari',
                'last_name' => 'Policinski',
                'allowed_guest' => true,
                'allowed_rehearsal_dinner' => true,
            ],
            [
                'first_name' => 'Some',
                'last_name' => 'Policinski',
                'allowed_guest' => true,
                'allowed_rehearsal_dinner' => false,
            ]
        ];

        foreach($guests as $guest) {
            \App\Models\Guest::create($guest);
        }
    }
}
