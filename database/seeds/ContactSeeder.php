<?php

use App\Contact;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {

            $contact = new Contact();
            $contact->name = $faker->name('male' | 'famale');
            $contact->lastname = $faker->firstName('male' | 'famale');
            $contact->email = $faker->email();
            $contact->save();
        }
    }
}
