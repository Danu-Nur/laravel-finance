<?php

namespace Database\Factories;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Transaction::class;

    public function definition()
    {
        // Array of descriptions based on the `category_id`
        $descriptions = [
            1 => 'Gaji bulanan',
            2 => 'Makanan sehari-hari',
            3 => 'Biaya transportasi',
            4 => 'Biaya kesehatan',
            5 => 'Investasi bulanan'
        ];

        // Get the category type and generate income/expense accordingly
        $categoryId = $this->faker->numberBetween(1, 5);
        $categoryType = ($categoryId === 1 || $categoryId === 5) ? 'income' : 'expense';

        // Set higher amount for incomes to ensure it outnumbers expenses
        $amount = ($categoryType === 'income')
            ? $this->faker->numberBetween(1000000, 10000000)
            : $this->faker->numberBetween(1000, 1000000);

        return [
            'user_id' => 1,
            'category_id' => $categoryId,
            'amount' => $amount,
            'description' => $descriptions[$categoryId] ?? 'Deskripsi tidak tersedia',
            // Date will be set sequentially in the seeder
            'date' => null,
        ];
    }
}
