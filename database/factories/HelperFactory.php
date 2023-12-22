<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\helperModel;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class HelperFactory extends Factory
{
    protected $model = helperModel::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_helper' => $this->faker->name,
            'email' => $this->faker->email,
            'tgl_lahir' => $this->faker->date,
            'foto_profile' => $this->faker->imageUrl,
            'nik' => $this->faker->randomNumber,
        ];
    }
}
