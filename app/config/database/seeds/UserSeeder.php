<?php

declare(strict_types=1);

use Phinx\Seed\AbstractSeed;

class UserSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
    public function run(): void
    {
      $data = [
        [
          'username' => 'user-1',
          'email'    => 'user1@gmail.com',
          'password' => 'user',
          'role'     => 'user'
        ],
        [
          'username' => 'user-2',
          'email'    => 'user2@gmail.com',
          'password' => 'user',
          'role'     => 'user'
        ],
        [
          'username' => 'admin-1',
          'email'    => 'admin1@gmail.com',
          'password' => 'admin',
          'role'     => 'admin'
        ],
        [
          'username' => 'admin-2',
          'email'    => 'admin2@gmail.com',
          'password' => 'admin',
          'role'     => 'admin'
        ],
      ];

      $posts = $this->table('users');
      $posts->insert($data)->saveData();

      // empty data
      // $posts -> truncate();
    }
}
