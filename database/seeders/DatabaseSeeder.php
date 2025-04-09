<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Document;
use App\Models\People;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'email' => 'test@example.com',
        ]);

        People::factory(5)->create();

        $documents = Document::factory(10)->create();

        $departmentTitles = [
            'Financeiro',
            'Recursos Humanos',
            'Tecnologia da Informação',
            'Marketing',
            'Comercial',
            'Logística',
            'Jurídico',
            'Compras',
            'Atendimento ao Cliente',
            'Operações',
        ];

        $departments = collect();
        foreach ($departmentTitles as $title) {
            $departments->push(Department::create(['titulo' => $title]));
        }

        foreach ($documents as $document) {
            $randomDepartments = $departments->random(rand(1, 3))->pluck('id')->toArray();
            $document->departments()->attach($randomDepartments);
        }
    }
}
