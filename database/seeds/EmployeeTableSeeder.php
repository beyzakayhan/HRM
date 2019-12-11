<?php

use App\Models\Employee;
use App\Models\Department;
use App\Models\Designation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker\Generator $faker)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        for($i=0;$i<5; $i++){
            
            $department=Department::create([
                'name'=>$faker->colorName,
                'description'=>$faker->text,
            ]);
    
         for ($j = 0; $j < 2; $j++) {
             $designation=$department->designations()->create([
                 'name' => $faker->safeColorName,
             ]);
            
             for($t = 0; $t <2; $t++){
                
                 $employee=$designation->employee()->create([
                    'name'=>$faker->name,
                    'birthday'=>$faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now'),
                    'gender' => $faker->randomElement($array = array ('male', 'female')),
                    'email' => $faker->email,
                    'phone' => $faker->e164PhoneNumber,
                    'addres' => $faker->address,
                    'join' => $faker->dateTimeBetween($startDate = '-5 years', $endDate = 'now'),
                    'quit' => null,
                    'salary' => $faker->numberBetween(2500,5000),
                    'photo' =>"avatar.jpeg"
                 ]);
                
             } 
             
         }

        }
             
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
    
    }
} 