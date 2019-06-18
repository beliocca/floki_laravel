<?php
use App\Product;
use App\ProductPhoto;
use App\ProductCategory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
          'role' => 'admin'
        ]);
        DB::table('roles')->insert([
          'role' => 'client'
        ]);

        DB::table('categories')->insert([
          'name' => 'kitchen'
        ]);

        DB::table('categories')->insert([
          'name' => 'bath'
        ]);

        DB::table('categories')->insert([
          'name' => 'bedroom'
        ]);

        DB::table('categories')->insert([
          'name' => 'office'
        ]);
        DB::table('categories')->insert([
          'name' => 'living'
        ]);
        DB::table('categories')->insert([
          'name' => 'dining'
        ]);

        DB::table('order_statuses')->insert([
          'status' => 'ESPERANDO PAGO'
        ]);
        DB::table('order_statuses')->insert([
          'status' => 'PAGO APROBADO'
        ]);
        DB::table('order_statuses')->insert([
          'status' => 'EN CAMINO'
        ]);
        DB::table('order_statuses')->insert([
          'status' => 'COMPRA FINALIZADA OK'
        ]);
        DB::table('order_statuses')->insert([
          'status' => 'COMPRA CANCELADA'
        ]);
        DB::table('order_statuses')->insert([
          'status' => 'COMPRA RECLAMADA'
        ]);

        $products = factory(Product::class)->times(60)->create();
        factory(ProductPhoto::class)->times(60)->create();


        foreach ($products as $product) {
          DB::table('product_category')->insert(
          [
          'product_id' => $product['id'],
          'category_id' => rand(1, 6)
          ]
          );
        }



    }
}
