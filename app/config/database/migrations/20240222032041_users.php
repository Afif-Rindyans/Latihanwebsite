<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class Users extends AbstractMigration
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
      $user = $this->table('users', array('id' => 'user_id'));

      $user
        ->addColumn('username', 'string', ['limit' => 100, 'null' => false])
        ->addColumn('email', 'string', ['limit' => 125, 'null' => false])
        ->addColumn('password', 'text', ['null' => false])
        ->addColumn('role', 'string', ['limit' => 50, 'null' => false])
        ->addColumn('created_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
        ->addIndex(['username'], ['unique' => true])
        ->addIndex(['email'], ['unique' => true])
      ->create();
    }
}
