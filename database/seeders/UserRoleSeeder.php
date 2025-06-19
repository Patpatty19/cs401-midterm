<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserRole;
use App\Models\User;
use App\Models\Role;
use Faker\Factory as FakerFactory;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = FakerFactory::create();

        $userIds = User::pluck('id')->toArray();
        $roleIds = Role::pluck('id')->toArray();

        // Assign each user a random set of roles (no duplicate pairs)
        foreach ($userIds as $userId) {
            $assignedRoles = $faker->randomElements($roleIds, rand(1, count($roleIds)));
            foreach ($assignedRoles as $roleId) {
                UserRole::firstOrCreate([
                    'user_id' => $userId,
                    'role_id' => $roleId,
                ]);
            }
        }
    }
}
