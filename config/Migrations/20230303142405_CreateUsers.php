<?php
use Migrations\AbstractMigration;

class CreateUsers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('users');
        $table->addColumn('firstname','string',[
            'default'=> 'First Name',
            'limit'=> 255,
            'null'=>false,
        ]);
        $table->addColumn('lastname','string',[
            'default'=> 'Last Name',
            'limit'=> 255,
            'null'=>false,
        ]);
        $table->addColumn('username','string',[
            'default'=> 'User Name',
            'limit'=> 255,
            'null'=>false,
        ]);
        $table->addColumn('email','string',[
            'default'=> 'Jhon@example.com',
            'limit'=> 255,
            'null'=>false,
        ]);
        $table->addColumn('password','string',[
            'limit'=> 255,
            'null'=>false,
        ]);
        $table->create();
    }
}
