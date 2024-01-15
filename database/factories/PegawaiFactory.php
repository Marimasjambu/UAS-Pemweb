<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
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
            'npwp' => fake()->numerify('##########'),
            'pegawai_name' => fake()->name(),
            'no_ktp' => fake()->unique()->numerify('##############'),
            'alamat_ktp' => fake()->address(),
            'ttl' => fake()->date(),
            'jns_kelamin' => fake()->randomElement(['Laki-laki','Perempuan']),
            'email' => fake()->safeEmail(),
            'phone' => fake()->phoneNumber(),
            'phone_perusahaan' => fake()->phoneNumber(),
            'no_npwp' => fake()->randomElement(['Orang Pribadi','Badan','BUT']),
            'kependudukan' => fake()->randomElement(['Dalam Negeri','Luar Negeri']),
        ];
    }
}
