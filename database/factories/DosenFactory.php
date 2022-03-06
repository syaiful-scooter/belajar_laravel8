<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DosenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nik' => $this->faker->randomNumber(8),
            'nip' => $this->faker->randomNumber(8),
            'nama_lengkap' => $this->faker->name(),
            'email' => $this->faker->safeEmail(),
            'tempat_lahir' => $this->faker->city(),
            'tanggal_lahir' => $this->faker->date('Y-m-d'),
            'alamat' => $this->faker->address(),
            'tlp' => $this->faker->PhoneNumber(),
            'pengampu' => $this->faker->jobTitle,

        ];
    }
}
