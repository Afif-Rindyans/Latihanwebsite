<?php

declare(strict_types=1);

use Phinx\Seed\AbstractSeed;

class ChatSeeder extends AbstractSeed
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
          'email'    => 'user1@gmail.com',
          'name'     => 'user-1',
          'chat'     => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem qui praesentium fuga quod quia odit ab, maiores est itaque iusto totam mollitia illo vel illum nihil magnam repellendus repellat eum!',
          'created_at'  => date('Y-m-d H:i:s'),
        ],
        [
          'email'    => 'user2@gmail.com',
          'name'     => 'user-2',
          'chat'     => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem qui praesentium fuga quod quia odit ab, maiores est itaque iusto totam mollitia illo vel illum nihil magnam repellendus repellat eum!',
          'created_at'  => date('Y-m-d H:i:s'),
        ],
        [
          'email'    => 'user3@gmail.com',
          'name'     => 'user-3',
          'chat'     => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem qui praesentium fuga quod quia odit ab, maiores est itaque iusto totam mollitia illo vel illum nihil magnam repellendus repellat eum!',
          'created_at'  => date('Y-m-d H:i:s'),
        ],
      ];

      $posts = $this->table('chat_visitors');
      $posts->insert($data)->saveData();

      // empty data
      // $posts -> truncate();
    }
}
