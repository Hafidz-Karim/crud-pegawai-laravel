<?php

namespace Database\Factories;

use Faker\Provider\bg_BG\PhoneNumber;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pegawai>
 */
class PegawaiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            "nama" => $this->faker->name(),
            "alamat" => $this->faker->address(),
            "umur" => $this->faker->numberBetween(25, 40),
            "gaji" => $this->faker->numberBetween(3000000, 7000000),
            "phone" => $this->faker->PhoneNumber(),
            "keterangan" => $this->faker->text()
        ];
    }
}
