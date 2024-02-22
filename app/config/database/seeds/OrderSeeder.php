<?php

declare(strict_types=1);

use Phinx\Seed\AbstractSeed;

class OrderSeeder extends AbstractSeed
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
          'brand'        => 'Mercedes Tiger',
          'first_name'   => 'user',
          'last_name'    => 'subscribe',
          'province'     => 'ony',
          'city'         => 'jeko',
          'subdistrict'  => 'jahil',
          'postal_code'  => '0961',
          'payment_type' => 'Cash',
          'no_telp'      => '1273174671637',
          'created_at'      => date('Y-m-d H:i:s'),
        ],
        [
          'brand'        => 'Dodge Charger R/T 1970',
          'first_name'   => 'user 2',
          'last_name'    => 'subscribe 2',
          'province'     => 'kany',
          'city'         => 'bito',
          'subdistrict'  => 'keno',
          'postal_code'  => '2831',
          'payment_type' => 'Kredit',
          'no_telp'      => '7183174671637',
          'created_at'      => date('Y-m-d H:i:s'),
        ]
      ];

      $posts = $this->table('orders');
      $posts->insert($data)->saveData();

      // empty data
      // $posts -> truncate();
    }
}
