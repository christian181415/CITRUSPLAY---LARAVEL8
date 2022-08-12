<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = User::create(
            [
                'name' => 'Christian De Jesús Moreno',
                'usuario'  =>  'christian181415',
                'email' => 'utp0139785@alumno.utpuebla.edu.mx',
                'password' => bcrypt('549273816'),
            ]);

        $user1->assignRole('Admin');



        $user2 = User::create(
        [
            'name' => 'Leonel Del Pilar Ortiz',
            'usuario'  =>  'Leonel',
            'email' => 'utp0009798@alumno.utpuebla.edu.mx',
            'password' => bcrypt('549273816'),
        ]);
        $user2->assignRole('Creador');


        $user3 = User::create(
        [
            'name' => 'Karla Gabriela Gonzalez Alvarez',
            'usuario'  =>  'Gaby',
            'email' => 'utp0140023@alumno.utpuebla.edu.mx',
            'password' => bcrypt('549273816'),
        ]);
        $user3->assignRole('Creador');


        $user4 = User::create(
        [
            'name' => 'Cristopher Hernandez Machorro',
            'usuario'  =>  'Cristopher',
            'email' => 'utp0142713@alumno.utpuebla.edu.mx',
            'password' => bcrypt('549273816'),
        ]);
        $user4->assignRole('Creador');


        $user5 = User::create(
        [
            'name' => 'Aldo Villanueva Perez',
            'usuario'  =>  'Aldo',
            'email' => 'utp0153965@alumno.utpuebla.edu.mx',
            'password' => bcrypt('549273816'),
        ]);
        $user5->assignRole('Creador');

        // User::factory(10)->create();
    }
}
