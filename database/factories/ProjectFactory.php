<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->company(),   // Tên dự án
            'description' => $this->faker->paragraph(4), // Mô tả ngắn
            'start_date' => $this->faker->date(),
            'end_date'   => $this->faker->date(),
            'status'     => $this->faker->randomElement(['Đang thi công', 'Hoàn thành', 'Tạm ngưng']),
        ];
    }
}
