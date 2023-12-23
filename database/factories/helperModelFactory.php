<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\helperModel;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\helperModel>
 */
class helperModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = helperModel::class;
    public function definition(): array
    {
        return [
            'nama_helper' => $this->faker->name,
            'email' => $this->faker->email,
            'tgl_lahir' => $this->faker->date,
            'foto_profile' => $this->faker->image(public_path('storage'),400,300, null, false),
            'nik' => $this->faker->randomNumber,
        ];
    }
}
