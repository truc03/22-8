<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->words(3, true),   // tên sản phẩm ngẫu nhiên
            'description' => $this->faker->sentence(10), // mô tả ngắn
            'price' => $this->faker->numberBetween(500000, 5000000), // giá từ 500k - 5tr
            'stock' => $this->faker->numberBetween(1, 100), // số lượng tồn
            'image' => $this->faker->imageUrl(400, 400, 'products', true), // ảnh giả
        ];
    }
}
