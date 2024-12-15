<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('user')->insert([
            ['nama' => 'Alice Johnson', 'email' => 'alicejohnson@user', 'password' => bcrypt('alice'), 'preferensi' => 'normal', 'alergi' => 'seafood', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Bob Smith', 'email' => 'bobsmith@user', 'password' => bcrypt('bob'), 'preferensi' => 'vegan', 'alergi' => 'peanut', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Charlie Brown', 'email' => 'charliebrown@user', 'password' => bcrypt('charlie'), 'preferensi' => 'normal', 'alergi' => 'shrimp', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'David Clark', 'email' => 'davidclark@user', 'password' => bcrypt('david'), 'preferensi' => 'normal', 'alergi' => 'none', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Eva White', 'email' => 'evawhite@user', 'password' => bcrypt('eva'), 'preferensi' => 'vegan', 'alergi' => 'none', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Frank Harris', 'email' => 'frankharris@user', 'password' => bcrypt('frank'), 'preferensi' => 'normal', 'alergi' => 'peanut', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Grace Lee', 'email' => 'gracelee@user', 'password' => bcrypt('grace'), 'preferensi' => 'vegan', 'alergi' => 'tofu', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Henry Scott', 'email' => 'henryscott@user', 'password' => bcrypt('henry'), 'preferensi' => 'normal', 'alergi' => 'milk', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Isabella Moore', 'email' => 'isabellamoore@user', 'password' => bcrypt('isabella'), 'preferensi' => 'vegan', 'alergi' => 'none', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Jack Taylor', 'email' => 'jacktaylor@user', 'password' => bcrypt('jack'), 'preferensi' => 'normal', 'alergi' => 'hazelnut', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Kathy Wilson', 'email' => 'kathywilson@user', 'password' => bcrypt('kathy'), 'preferensi' => 'vegan', 'alergi' => 'none', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Liam Moore', 'email' => 'liammoore@user', 'password' => bcrypt('liam'), 'preferensi' => 'normal', 'alergi' => 'none', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Megan Martinez', 'email' => 'meganmartinez@user', 'password' => bcrypt('megan'), 'preferensi' => 'vegan', 'alergi' => 'peanut', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Nina Davis', 'email' => 'ninadavis@user', 'password' => bcrypt('nina'), 'preferensi' => 'normal', 'alergi' => 'shrimp', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Oliver King', 'email' => 'oliverking@user', 'password' => bcrypt('oliver'), 'preferensi' => 'normal', 'alergi' => 'seafood', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Penny Adams', 'email' => 'pennyadams@user', 'password' => bcrypt('penny'), 'preferensi' => 'vegan', 'alergi' => 'none', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Quincy Taylor', 'email' => 'quincytaylor@user', 'password' => bcrypt('quincy'), 'preferensi' => 'normal', 'alergi' => 'milk', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Rachel Brown', 'email' => 'rachelbrown@user', 'password' => bcrypt('rachel'), 'preferensi' => 'vegan', 'alergi' => 'none', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Sam Green', 'email' => 'samgreen@user', 'password' => bcrypt('sam'), 'preferensi' => 'normal', 'alergi' => 'hazelnut', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Tina Foster', 'email' => 'tinafoster@user', 'password' => bcrypt('tina'), 'preferensi' => 'vegan', 'alergi' => 'tofu', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Ursula Grant', 'email' => 'ursulagrant@user', 'password' => bcrypt('ursula'), 'preferensi' => 'normal', 'alergi' => 'none', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Victor Lee', 'email' => 'victorlee@user', 'password' => bcrypt('victor'), 'preferensi' => 'normal', 'alergi' => 'peanut', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Wendy Harris', 'email' => 'wendyharris@user', 'password' => bcrypt('wendy'), 'preferensi' => 'vegan', 'alergi' => 'none', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Xander Clark', 'email' => 'xanderclark@user', 'password' => bcrypt('xander'), 'preferensi' => 'normal', 'alergi' => 'milk', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Yara Scott', 'email' => 'yarascott@user', 'password' => bcrypt('yara'), 'preferensi' => 'vegan', 'alergi' => 'none', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
