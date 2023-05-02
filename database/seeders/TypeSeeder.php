<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types =['BackEnd','FrontEnd','Full stack','Programming'];

        foreach ($types as $type) {
            $new_type = new Type();  
            
            $new_type->nome = $type;
            $new_type->slug = Str::slug($type);

            $new_type->save();
        }
    }
}