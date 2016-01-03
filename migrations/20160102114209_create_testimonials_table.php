<?php

use Phinx\Migration\AbstractMigration;

class CreateTestimonialsTable extends AbstractMigration
{
  Public function up()
  {
    $user = $this->table('testimonials');
    $user->addColumn('title', 'string')
         ->addColumn('testimonial', 'text')
         ->addColumn('user_id', 'integer')
         ->addForeignKey('user_id', 'users', 'id', ['delete' => 'cascade', 'update' => 'cascade'])
         ->addColumn('created_at', 'datetime', ['default' => 'CURRENT_TIMESTAMP'])
         ->addColumn('updated_at', 'datetime', ['null' => true])
         ->save();

  }

  Public function down()
  {
    $this->dropTable('testimonials');
  }
}
