<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('user')->insert([
            ['nama' => 'Alice Johnson', 'email' => 'alicejohnson@user.com', 'password' => bcrypt('alice'), 'preferensi' => 'normal', 'alergi' => 'seafood', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Bob Smith', 'email' => 'bobsmith@user.com', 'password' => bcrypt('bob'), 'preferensi' => 'vegan', 'alergi' => 'peanut', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Charlie Brown', 'email' => 'charliebrown@user.com', 'password' => bcrypt('charlie'), 'preferensi' => 'normal', 'alergi' => 'seafood', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'David Clark', 'email' => 'davidclark@user.com', 'password' => bcrypt('david'), 'preferensi' => 'normal', 'alergi' => 'none', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Eva White', 'email' => 'evawhite@user.com', 'password' => bcrypt('eva'), 'preferensi' => 'vegan', 'alergi' => 'none', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Frank Harris', 'email' => 'frankharris@user.com', 'password' => bcrypt('frank'), 'preferensi' => 'normal', 'alergi' => 'peanut', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Grace Lee', 'email' => 'gracelee@user.com', 'password' => bcrypt('grace'), 'preferensi' => 'vegan', 'alergi' => 'tofu', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Henry Scott', 'email' => 'henryscott@user.com', 'password' => bcrypt('henry'), 'preferensi' => 'normal', 'alergi' => 'milk', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Isabella Moore', 'email' => 'isabellamoore@user.com', 'password' => bcrypt('isabella'), 'preferensi' => 'vegan', 'alergi' => 'none', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Jack Taylor', 'email' => 'jacktaylor@user.com', 'password' => bcrypt('jack'), 'preferensi' => 'normal', 'alergi' => 'hazelnut', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Kathy Wilson', 'email' => 'kathywilson@user.com', 'password' => bcrypt('kathy'), 'preferensi' => 'vegan', 'alergi' => 'none', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Liam Moore', 'email' => 'liammoore@user.com', 'password' => bcrypt('liam'), 'preferensi' => 'normal', 'alergi' => 'none', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Megan Martinez', 'email' => 'meganmartinez@user.com', 'password' => bcrypt('megan'), 'preferensi' => 'vegan', 'alergi' => 'peanut', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Nina Davis', 'email' => 'ninadavis@user.com', 'password' => bcrypt('nina'), 'preferensi' => 'normal', 'alergi' => 'seafood', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Oliver King', 'email' => 'oliverking@user.com', 'password' => bcrypt('oliver'), 'preferensi' => 'normal', 'alergi' => 'seafood', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Penny Adams', 'email' => 'pennyadams@user.com', 'password' => bcrypt('penny'), 'preferensi' => 'vegan', 'alergi' => 'none', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Quincy Taylor', 'email' => 'quincytaylor@user.com', 'password' => bcrypt('quincy'), 'preferensi' => 'normal', 'alergi' => 'milk', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Rachel Brown', 'email' => 'rachelbrown@user.com', 'password' => bcrypt('rachel'), 'preferensi' => 'vegan', 'alergi' => 'none', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Sam Green', 'email' => 'samgreen@user.com', 'password' => bcrypt('sam'), 'preferensi' => 'normal', 'alergi' => 'hazelnut', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Tina Foster', 'email' => 'tinafoster@user.com', 'password' => bcrypt('tina'), 'preferensi' => 'vegan', 'alergi' => 'tofu', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Ursula Grant', 'email' => 'ursulagrant@user.com', 'password' => bcrypt('ursula'), 'preferensi' => 'normal', 'alergi' => 'none', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Victor Lee', 'email' => 'victorlee@user.com', 'password' => bcrypt('victor'), 'preferensi' => 'normal', 'alergi' => 'peanut', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Wendy Harris', 'email' => 'wendyharris@user.com', 'password' => bcrypt('wendy'), 'preferensi' => 'vegan', 'alergi' => 'none', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Xander Clark', 'email' => 'xanderclark@user.com', 'password' => bcrypt('xander'), 'preferensi' => 'normal', 'alergi' => 'milk', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Yara Scott', 'email' => 'yarascott@user.com', 'password' => bcrypt('yara'), 'preferensi' => 'vegan', 'alergi' => 'none', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Zara Williams', 'email' => 'zarawilliams@user.com', 'password' => bcrypt('zara'), 'preferensi' => 'spicy', 'alergi' => 'tofu', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Ethan Brown', 'email' => 'ethanbrown@user.com', 'password' => bcrypt('ethan'), 'preferensi' => 'spicy', 'alergi' => 'seafood', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Sophia Miller', 'email' => 'sophiamiller@user.com', 'password' => bcrypt('sophia'), 'preferensi' => 'spicy', 'alergi' => 'none', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Anna Green', 'email' => 'annagreen@user.com', 'password' => bcrypt('anna'), 'preferensi' => 'vegan', 'alergi' => 'none', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Brian Taylor', 'email' => 'briantaylor@user.com', 'password' => bcrypt('brian'), 'preferensi' => 'vegan', 'alergi' => 'milk', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Chloe White', 'email' => 'chloewhite@user.com', 'password' => bcrypt('chloe'), 'preferensi' => 'spicy', 'alergi' => 'peanut', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Alice Cooper', 'email' => 'alicecooper@user.com', 'password' => bcrypt('alicec'), 'preferensi' => 'vegan', 'alergi' => 'peanut', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Bob Dylan', 'email' => 'bobdylan@user.com', 'password' => bcrypt('bobd'), 'preferensi' => 'normal', 'alergi' => 'seafood', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Charlie Daniels', 'email' => 'charliedaniels@user.com', 'password' => bcrypt('charlied'), 'preferensi' => 'spicy', 'alergi' => 'none', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Diana Smith', 'email' => 'dianasmith@user.com', 'password' => bcrypt('diana'), 'preferensi' => 'normal', 'alergi' => 'milk', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Eva Gomez', 'email' => 'evagomez@user.com', 'password' => bcrypt('eva'), 'preferensi' => 'vegan', 'alergi' => 'hazelnut', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Liam Neeson', 'email' => 'liamneeson@user.com', 'password' => bcrypt('liam'), 'preferensi' => 'spicy', 'alergi' => 'milk', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Olivia Brown', 'email' => 'oliviabrown@user.com', 'password' => bcrypt('olivia'), 'preferensi' => 'normal', 'alergi' => 'seafood', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Mason Green', 'email' => 'masongreen@user.com', 'password' => bcrypt('mason'), 'preferensi' => 'vegan', 'alergi' => 'tofu', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Natalie King', 'email' => 'natalieking@user.com', 'password' => bcrypt('natalie'), 'preferensi' => 'normal', 'alergi' => 'none', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Oliver James', 'email' => 'oliverjames@user.com', 'password' => bcrypt('oliver'), 'preferensi' => 'spicy', 'alergi' => 'none', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Sophia Clark', 'email' => 'sophiaclark@user.com', 'password' => bcrypt('sophia'), 'preferensi' => 'vegan', 'alergi' => 'peanut', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Jackson Scott', 'email' => 'jacksonscott@user.com', 'password' => bcrypt('jackson'), 'preferensi' => 'normal', 'alergi' => 'hazelnut', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Chloe Harris', 'email' => 'chloeharris@user.com', 'password' => bcrypt('chloe'), 'preferensi' => 'spicy', 'alergi' => 'seafood', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Evan Mitchell', 'email' => 'evanmitchell@user.com', 'password' => bcrypt('evan'), 'preferensi' => 'normal', 'alergi' => 'milk', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Zoe Thomas', 'email' => 'zoethomas@user.com', 'password' => bcrypt('zoe'), 'preferensi' => 'vegan', 'alergi' => 'none', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Lily Adams', 'email' => 'lilyadams@user.com', 'password' => bcrypt('lily'), 'preferensi' => 'dessert', 'alergi' => 'milk', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Mia Robinson', 'email' => 'miarobinson@user.com', 'password' => bcrypt('mia'), 'preferensi' => 'dessert', 'alergi' => 'peanut', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Oliver Evans', 'email' => 'oliverevans@user.com', 'password' => bcrypt('oliver'), 'preferensi' => 'dessert', 'alergi' => 'none', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
