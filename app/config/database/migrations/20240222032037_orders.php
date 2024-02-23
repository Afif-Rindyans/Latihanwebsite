<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class Orders extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change(): void
    {
      $order = $this->table('orders', array('id' => 'order_id'));

      $order
        ->addColumn('brand', 'string', ['limit' => 125, 'null' => false])
        ->addColumn('first_name', 'string', ['limit' => 100, 'null' => false])
        ->addColumn('last_name', 'string', ['limit' => 100, 'null' => false])
        ->addColumn('province', 'string', ['limit' => 100, 'null' => false])
        ->addColumn('city', 'string', ['limit' => 100, 'null' => false])
        ->addColumn('subdistrict', 'string', ['limit' => 100, 'null' => false])
        ->addColumn('postal_code', 'string', ['limit' => 100, 'null' => false])
        ->addColumn('payment_type', 'string', ['limit' => 100, 'null' => false])
        ->addColumn('no_telp', 'string', ['limit' => 100, 'null' => false])
        ->addColumn('created_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
      ->create();
    }
}
