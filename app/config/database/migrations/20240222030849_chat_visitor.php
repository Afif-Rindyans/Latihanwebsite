<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class ChatVisitor extends AbstractMigration
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
      $chat_visitor = $this->table('chat_visitors', array('id' => 'chat_id'));

      $chat_visitor
        ->addColumn('email', 'string', ['limit' => 125, 'null' => false])
        ->addColumn('name', 'string', ['limit' => 100, 'null' => false])
        ->addColumn('chat', 'text', ['null' => false])
        ->addColumn('created_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
      ->create();
    }
}
