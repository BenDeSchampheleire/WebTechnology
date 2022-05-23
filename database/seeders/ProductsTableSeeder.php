<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Product;
include 'database\factories\ProductFactory.php';

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Product::class,8)->create();
    }
}
