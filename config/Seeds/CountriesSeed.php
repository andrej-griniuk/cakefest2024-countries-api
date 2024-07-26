<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Countries seed.
 */
class CountriesSeed extends AbstractSeed
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
                'id' => 'US',
                'name' => 'United States',
            ],
            [
                'id' => 'CA',
                'name' => 'Canada',
            ],
            [
                'id' => 'MX',
                'name' => 'Mexico',
            ],
            [
                'id' => 'LU',
                'name' => 'Luxembourg',
            ],
        ];

        $table = $this->table('countries');
        $table->insert($data)->save();
    }
}
