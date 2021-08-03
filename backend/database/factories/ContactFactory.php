<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $int = mt_rand(1262055681,1262055681);
        $dob = date("Y-m-d H:i:s", $int);

        return [
            'salutation' => $this->faker->title(),
            'first_name' => $this->faker->firstName(),
            'middle_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'dob' => $dob,
            'address' => $this->faker->streetAddress(),
            'city' => $this->faker->city(),
            'postcode' => $this->faker->postcode(),
            'telephone' => $this->faker->phoneNumber(),
            'email' => $this->faker->safeEmail(),
        ];
    }
}
