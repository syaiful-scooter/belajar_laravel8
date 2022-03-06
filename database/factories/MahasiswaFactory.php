<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Mahasiswa;

class MahasiswaFactory extends Factory
{
    protected $model = Mahasiswa::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'nim' => $this->faker->randomNumber(8),
            'nama' => $this->faker->name,
            'tempat_lahir' => $this->faker->city,
            'tanggal_lahir' => $this->faker->date('Y-m-d'),
            'fakultas' => $this->faker->company,
            'jurusan' => $this->faker->jobTitle,

        ];
    }
}
