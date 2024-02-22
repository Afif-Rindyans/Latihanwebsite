<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CarsDetail extends AbstractMigration
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
      $car_detail = $this->table('cars_detail', array('id' => 'car_id'));

      $car_detail
        ->addColumn('showroam_name', 'string', ['limit' => 125, 'null' => false])
        ->addColumn('brand', 'string', ['limit' => 125, 'null' => false])
        ->addColumn('price', 'string', ['limit' => 125, 'null' => false])
        ->addColumn('type_car', 'string', ['limit' => 125, 'null' => false])
        ->addColumn('type_engine', 'string', ['limit' => 125, 'null' => false])
        ->addColumn('machine_capacity', 'string', ['limit' => 125, 'null' => false])
        ->addColumn('oil_capacity', 'string', ['limit' => 125, 'null' => false])
        ->addColumn('fuel', 'string', ['limit' => 125, 'null' => false])
        ->addColumn('engine_power', 'string', ['limit' => 125, 'null' => false])
        ->addColumn('type_transmission', 'string', ['limit' => 125, 'null' => false])
        ->addColumn('type_turbo', 'string', ['limit' => 125, 'null' => false])
        ->addColumn('car_image', 'string', ['limit' => 255, 'null' => false])
        ->addColumn('car_video', 'text', ['null' => false])
        ->create();
    }
}
