<?php

use Phinx\Migration\AbstractMigration;

class CreatePagesTable extends AbstractMigration
{
     Public function up()
     {
       $user = $this->table('pages');
       $user->addColumn('browser_title', 'string')
            ->addColumn('page_content', 'text')
            ->addColumn('created_at', 'datetime', ['default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('updated_at', 'datetime', ['null' => true])
            ->save();

     }

     Public function down()
     {
       $this->dropTable('pages');
     }
}
