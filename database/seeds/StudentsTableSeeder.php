<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
            DB::table('students')->insert([
                'name' => 'mrA',
                'job' => 'PHP',
            ]);
            DB::table('students')->insert([
                'name' => 'mrB',
                'job' => 'No',
            ]);
            DB::table('students')->insert([
                'name' => 'mrC',
                'job' => 'PHP',
            ]);
            DB::table('students')->insert([
                'name' => 'mrD',
                'job' => 'No',
            ]);
            DB::table('students')->insert([
                'name' => 'mrE',
                'job' => 'No',
            ]);
    }
}
