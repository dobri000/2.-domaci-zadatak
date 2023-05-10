<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $cus1 = Customer::create([
            'id' => 1,
            'firstname' => 'Petar',
            'lastname' => 'Petrovic',
            'birth' => '1960-02-19',
            'email' => 'petar@yahoo.com',
            'address' => 'Petra Petrovica 8'
        ]);
        $cus2 = Customer::create([
            'id' => 2,
            'firstname' => 'Marko',
            'lastname' => 'Markovic',
            'birth' => '1998-12-23',
            'email' => 'marko@gmail.com',
            'address' => 'Kraljevica Marka 19'
        ]);
        $cus3 = Customer::create([
            'id' => 3,
            'firstname' => 'Janko',
            'lastname' => 'Jankovic',
            'birth' => '2000-01-03',
            'email' => 'yanko@yahoo.com',
            'address' => 'Cara Dusana 56'
        ]);
        $pro1 = Product::create([
            'id' => 1,
            'product_name' => 'Mis',
            'price' => 1500
        ]);
        $pro2 = Product::create([
            'id' => 2,
            'product_name' => 'Monitor',
            'price' => 23000
        ]);
        $pro3 = Product::create([
            'id' => 3,
            'product_name' => 'Tastatura',
            'price' => 3500
        ]);
        $ord1 = Order::create([
            'customer_id' => 1,
            'product_id' => 2,
            'quantity' => 3
        ]);
        $ord2 = Order::create([
            'customer_id' => 1,
            'product_id' => 1,
            'quantity' => 1
        ]);
        $ord3 = Order::create([
            'customer_id' => 3,
            'product_id' => 3,
            'quantity' => 5
        ]);
    }
}
