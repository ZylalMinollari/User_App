<?php

use Cake\Utility\Security;
use Migrations\AbstractSeed;
use Cake\Auth\DefaultPasswordHasher;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
        //This seeder is created for initial logging
        $data = [
            [
                'firstname' => 'Admin',
                'lastname' => 'Admin',
                'username' => 'Adminadmin',
                'email' => 'Admin@example.com',
                'password' => $this->hashPassword('Admin@example.com'),
            ],
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }

    private function hashPassword($password)
    {
        $hasher = new DefaultPasswordHasher();
        return $hasher->hash($password);
    }
}
