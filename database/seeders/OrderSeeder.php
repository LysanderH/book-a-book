<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Order;
use App\Models\Status;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * 1) Take 70 Users and link oders with the users
         * 2) Attach the current (random) status with custom dates to the order
         * 3) Add books to the order
         */
        $users = User::all()->take(70);
        $status = Status::all();
        foreach ($users as $user) {
            $currentOrder = Order::create([
                'user_id' => $user->id,
                'season_id' => rand(1, 2),
                'draft'=> rand(0, 1)
            ]);
            $randomStatusId = rand(1, count($status));
            $date = Carbon::now()->subYear();
            for ($i = 1; $i <= $randomStatusId; $i++) {
                $currentOrder->statuses()->attach($i, ['created_at'=> $date->addDays(2), 'updated_at'=> $date->addDays(2)]);
            }

            $books = Book::all()->shuffle();
            $books = $books->take(rand(1, count($books)));
            foreach ($books as $book) {
                $currentOrder->books()->attach($book->id);
            }
        }
    }
}
