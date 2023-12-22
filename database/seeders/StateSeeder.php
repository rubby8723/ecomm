<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Country;
use App\Models\State;
class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        State::truncate();
        foreach (Country::get() as $key => $value) {
            // dd($key);
            if($value=='Algeria'){
                State::insert([
                    ['name'=>'Adrar','country_id'=>'1',"created_at" => now(),"updated_at" => now()],
                    ['name'=>'Aïn Defla','country_id'=>'1',"created_at" => now(),"updated_at" => now()],
                    ['name'=>'Aïn Témouchent ','country_id'=>'1',"created_at" => now(),"updated_at" => now()],
                    ['name'=>'Algiers','country_id'=>'1',"created_at" => now(),"updated_at" => now()],
                    ['name'=>'Annaba','country_id'=>'1',"created_at" => now(),"updated_at" => now()],
                    ['name'=>'Batna','country_id'=>'1',"created_at" => now(),"updated_at" => now()],
                    ['name'=>'Béchar','country_id'=>'1',"created_at" => now(),"updated_at" => now()],
                    ['name'=>'Béjaïa','country_id'=>'1',"created_at" => now(),"updated_at" => now()],
                    ['name'=>'Béni Abbès ','country_id'=>'1',"created_at" => now(),"updated_at" => now()],
                ]);
            }  
            if($value=='Angola'){
                State::insert([
                    ['name'=>'Adrar','country_id'=>'1',"created_at" => now(),"updated_at" => now()],
                    ['name'=>'Aïn Defla','country_id'=>'1',"created_at" => now(),"updated_at" => now()],
                    ['name'=>'Aïn Témouchent ','country_id'=>'1',"created_at" => now(),"updated_at" => now()],
                    ['name'=>'Algiers','country_id'=>'1',"created_at" => now(),"updated_at" => now()],
                    ['name'=>'Annaba','country_id'=>'1',"created_at" => now(),"updated_at" => now()],
                    ['name'=>'Batna','country_id'=>'1',"created_at" => now(),"updated_at" => now()],
                    ['name'=>'Béchar','country_id'=>'1',"created_at" => now(),"updated_at" => now()],
                    ['name'=>'Béjaïa','country_id'=>'1',"created_at" => now(),"updated_at" => now()],
                    ['name'=>'Béni Abbès ','country_id'=>'1',"created_at" => now(),"updated_at" => now()],
                ]);  
            }
            if($value=='Benin'){
                State::insert([
                    ['name'=>'Adrar','country_id'=>'1',"created_at" => now(),"updated_at" => now()],
                    ['name'=>'Aïn Defla','country_id'=>'1',"created_at" => now(),"updated_at" => now()],
                    ['name'=>'Aïn Témouchent ','country_id'=>'1',"created_at" => now(),"updated_at" => now()],
                    ['name'=>'Algiers','country_id'=>'1',"created_at" => now(),"updated_at" => now()],
                    ['name'=>'Annaba','country_id'=>'1',"created_at" => now(),"updated_at" => now()],
                    ['name'=>'Batna','country_id'=>'1',"created_at" => now(),"updated_at" => now()],
                    ['name'=>'Béchar','country_id'=>'1',"created_at" => now(),"updated_at" => now()],
                    ['name'=>'Béjaïa','country_id'=>'1',"created_at" => now(),"updated_at" => now()],
                    ['name'=>'Béni Abbès ','country_id'=>'1',"created_at" => now(),"updated_at" => now()],
                ]);  
            }
            if($value=='Botswana'){
                State::insert([
                    ['name'=>'Adrar','country_id'=>'1',"created_at" => now(),"updated_at" => now()],
                    ['name'=>'Aïn Defla','country_id'=>'1',"created_at" => now(),"updated_at" => now()],
                    ['name'=>'Aïn Témouchent ','country_id'=>'1',"created_at" => now(),"updated_at" => now()],
                    ['name'=>'Algiers','country_id'=>'1',"created_at" => now(),"updated_at" => now()],
                    ['name'=>'Annaba','country_id'=>'1',"created_at" => now(),"updated_at" => now()],
                    ['name'=>'Batna','country_id'=>'1',"created_at" => now(),"updated_at" => now()],
                    ['name'=>'Béchar','country_id'=>'1',"created_at" => now(),"updated_at" => now()],
                    ['name'=>'Béjaïa','country_id'=>'1',"created_at" => now(),"updated_at" => now()],
                    ['name'=>'Béni Abbès ','country_id'=>'1',"created_at" => now(),"updated_at" => now()],
                ]);  
            }
            if($value=='Burkina Faso'){
                State::insert([
                    ['name'=>'Adrar','country_id'=>'1',"created_at" => now(),"updated_at" => now()],
                    ['name'=>'Aïn Defla','country_id'=>'1',"created_at" => now(),"updated_at" => now()],
                    ['name'=>'Aïn Témouchent ','country_id'=>'1',"created_at" => now(),"updated_at" => now()],
                    ['name'=>'Algiers','country_id'=>'1',"created_at" => now(),"updated_at" => now()],
                    ['name'=>'Annaba','country_id'=>'1',"created_at" => now(),"updated_at" => now()],
                    ['name'=>'Batna','country_id'=>'1',"created_at" => now(),"updated_at" => now()],
                    ['name'=>'Béchar','country_id'=>'1',"created_at" => now(),"updated_at" => now()],
                    ['name'=>'Béjaïa','country_id'=>'1',"created_at" => now(),"updated_at" => now()],
                    ['name'=>'Béni Abbès ','country_id'=>'1',"created_at" => now(),"updated_at" => now()],
                ]);  
            }
    }
}
}
