<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Message;
class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Message::create([
            'user_id' => '1',
            'text' => 'message from first client',
            'manager_id' => '1',
        ]);
        Message::create([
            'user_id' => '2',
            'text' => 'message from second client',
            'manager_id' => '1',
        ]);
    }
}
