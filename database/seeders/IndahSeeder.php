<?php

namespace Database\Seeders;

use App\Models\IndahModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IndahSeeder extends Seeder
{
    /**
     * Run the database see
     */
    public function run(): void
    {
        IndahModel::insert(values: [
                [
                    'name' => 'Indah'
                ],
                [
                    'name' => 'Indah'
                ],
                [
                    'name' => 'Indah'
                ],
                [
                    'name' => 'Indah'
                ],
                [
                    'name' => 'Indah'
                ],
                [
                    'name' => 'Indah'
                ],
                [
                    'name' => 'Indah'
                ],
                [
                    'name' => 'Indah'
                ],
                [
                    'name' => 'Indah'
                ],
                [
                    'name' => 'Indah'
                ],
                [
                    'name' => 'Indah'
                ],
        ]);
    }
}
