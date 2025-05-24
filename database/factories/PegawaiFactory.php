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
            "nama" => $this->faker->name,
            "alamat" => $this->faker->address,
            "no_phone" => $this->faker->phoneNumber,
            "tanggal_lahir" => $this->faker->date,
            "tempat_lahir" => $this->faker->city,
            "jabatan" => $this->faker->word()
        ];
    }
}
