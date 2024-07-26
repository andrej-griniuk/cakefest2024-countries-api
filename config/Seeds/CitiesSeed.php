<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Cities seed.
 */
class CitiesSeed extends AbstractSeed
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
    public function run(): void
    {
        $data = [
            [
                'id' => '00068d0c-53bf-44e7-a754-810e2603ceb0',
                'country_id' => 'US',
                'name' => 'New York',
            ]
        ];

        $table = $this->table('cities');
        $table->insert($data)->save();
    }
}
