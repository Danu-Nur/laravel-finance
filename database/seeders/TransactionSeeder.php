<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $totalIncome = 0;
        $totalExpense = 0;

        // Descriptions for categories
        $descriptions = [
            1 => 'Gaji bulanan',
            2 => 'Makanan sehari-hari',
            3 => 'Biaya transportasi',
            4 => 'Biaya kesehatan',
            5 => 'Investasi bulanan'
        ];

        $date = Carbon::create(2024, 1, 1); // Start date from January 1, 2024

        // Generate income transactions for each month
        for ($i = 1; $i <= 12; $i++) { // Loop through each month
            $incomeTransactions = rand(3, 5); // Set a random number of income transactions per month

            for ($j = 0; $j < $incomeTransactions; $j++) {
                $transaction = new Transaction();
                $transaction->user_id = 1;
                $transaction->category_id = [1, 5][array_rand([1, 5])]; // Random income category (1 or 5)
                $transaction->amount = rand(1000000, 10000000); // Random income amount
                $transaction->description = $descriptions[$transaction->category_id];
                $transaction->date = $date->copy();
                $transaction->save();

                $totalIncome += $transaction->amount;

                // Spread transactions within the month by random days
                $date->addDays(rand(3, 7));
                if ($date->month != $i) {
                    $date->startOfMonth()->addMonths($i - 1); // Reset to start of the month if it spills into the next
                }
            }

            // Move to the start of the next month
            $date->startOfMonth()->addMonth();
        }

        // Reset date for expense transactions
        $date = Carbon::create(2024, 1, 1);

        // Generate expense transactions for each month
        for ($i = 1; $i <= 12; $i++) { // Loop through each month
            $expenseTransactions = rand(3, 5); // Set a random number of expense transactions per month

            for ($j = 0; $j < $expenseTransactions; $j++) {
                $transaction = new Transaction();
                $transaction->user_id = 1;
                $transaction->category_id = [2, 3, 4][array_rand([2, 3, 4])]; // Random expense category (2, 3, or 4)
                $transaction->amount = rand(1000, 1000000); // Random expense amount
                $transaction->description = $descriptions[$transaction->category_id];
                $transaction->date = $date->copy();
                $transaction->save();

                $totalExpense += $transaction->amount;

                // Spread transactions within the month by random days
                $date->addDays(rand(3, 7));
                if ($date->month != $i) {
                    $date->startOfMonth()->addMonths($i - 1); // Reset to start of the month if it spills into the next
                }
            }

            // Move to the start of the next month
            $date->startOfMonth()->addMonth();
        }

        // Ensure total income is greater than total expense
        if ($totalIncome <= $totalExpense) {
            $incomeDifference = ($totalExpense - $totalIncome) + rand(1000, 10000);
            Transaction::create([
                'user_id' => 1,
                'category_id' => 1, // Assuming category_id 1 is 'Gaji' (income)
                'amount' => $incomeDifference,
                'description' => 'Additional income to balance',
                'date' => Carbon::create(2024, 12, rand(1, 31)), // Assign the balancing transaction to December
            ]);
        }
    }
}
