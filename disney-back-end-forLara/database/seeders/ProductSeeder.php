<?php

namespace Database\Seeders;

use App\Models\Product;
use Database\Factories\ProductFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory(15)->create();

        $product = new Product();
        $product->model_code = "KDNP_RB005GP48";
        $product->image_path = "654a8d1639f04.png";
        $product->category = "Jewelry";
        $product->name = "A tale of Enchantment Ring-Belle #48";
        $product->price = 1690;
        $product->size = 48;
        $product->stock_quantity = 11;
        $product->created_at = "2023-11-03 13:40:07";
        $product->updated_at = "2023-11-03 13:40:07";
        $product->save();


        // Alien collection

        $product = new Product();
        $product->model_code = "KDNT_BA028RDM";
        $product->image_path = "654a8cc6715d8.png";
        $product->category = "Jewelry";
        $product->name = "Alien Toy bracelet(M)";
        $product->price = 2490;
        $product->size = 22;
        $product->stock_quantity = 0;
        $product->created_at = "2023-11-03 13:40:07";
        $product->updated_at = "2023-11-03 13:40:07";
        $product->save();

        $product = new Product();
        $product->model_code = "KDNT_BA026RD";
        $product->image_path = "654a8d0cb4f34.png";
        $product->category = "Jewelry";
        $product->name = "Alien Toy Earring";
        $product->price = 2790;
        $product->size = 10;
        $product->stock_quantity = 3;
        $product->created_at = "2023-11-03 13:40:07";
        $product->updated_at = "2023-11-03 13:40:07";
        $product->save();

        $product = new Product();
        $product->model_code = "KDNT_BA025RD";
        $product->image_path = "654a8d0400ba2.png";
        $product->category = "Jewelry";
        $product->name = "Alien Toy Necklace#18";
        $product->price = 3490;
        $product->size = 18;
        $product->stock_quantity = 4;
        $product->created_at = "2023-11-03 13:40:07";
        $product->updated_at = "2023-11-03 13:40:07";
        $product->save();

        $product = new Product();
        $product->model_code = "KDNT_BA025RD";
        $product->image_path = "654a8cf38f336.png";
        $product->category = "Jewelry";
        $product->name = "Alien Toy Necklace#20";
        $product->price = 3490;
        $product->size = 20;
        $product->stock_quantity = 4;
        $product->created_at = "2023-11-03 13:40:07";
        $product->updated_at = "2023-11-03 13:40:07";
        $product->save();

        $product = new Product();
        $product->model_code = "KDNT_BA027RD48";
        $product->image_path = "654a8cf38f336.png";
        $product->category = "Jewelry";
        $product->name = "Alien Toy Ring#48";
        $product->price = 1890;
        $product->size = 48;
        $product->stock_quantity = 4;
        $product->created_at = "2023-11-03 13:40:07";
        $product->updated_at = "2023-11-03 13:40:07";
        $product->save();

        $product = new Product();
        $product->model_code = "KDNT_BA027RD50";
        $product->image_path = "654a8cf38f336.png";
        $product->category = "Jewelry";
        $product->name = "Alien Toy Ring#50";
        $product->price = 1890;
        $product->size = 50;
        $product->stock_quantity = 3;
        $product->created_at = "2023-11-03 13:40:07";
        $product->updated_at = "2023-11-03 13:40:07";
        $product->save();

        $product = new Product();
        $product->model_code = "KDNT_BA027RD52";
        $product->image_path = "654a8cf38f336.png";
        $product->category = "Jewelry";
        $product->name = "Alien Toy Ring#52";
        $product->price = 1890;
        $product->size = 52;
        $product->stock_quantity = 3;
        $product->created_at = "2023-11-03 13:40:07";
        $product->updated_at = "2023-11-03 13:40:07";
        $product->save();

        $product = new Product();
        $product->model_code = "KDNT_BA027RD54";
        $product->image_path = "654a8cf38f336.png";
        $product->category = "Jewelry";
        $product->name = "Alien Toy Ring#54";
        $product->price = 1890;
        $product->size = 54;
        $product->stock_quantity = 3;
        $product->created_at = "2023-11-03 13:40:07";
        $product->updated_at = "2023-11-03 13:40:07";
        $product->save();

        $product = new Product();
        $product->model_code = "KDNT_BA027RD56";
        $product->image_path = "654a8cf38f336.png";
        $product->category = "Jewelry";
        $product->name = "Alien Toy Ring#56";
        $product->price = 1890;
        $product->size = 56;
        $product->stock_quantity = 6;
        $product->created_at = "2023-11-03 13:40:07";
        $product->updated_at = "2023-11-03 13:40:07";
        $product->save();

        $product = new Product();
        $product->model_code = "KDNT_BA027RD58";
        $product->image_path = "654a8cf38f336.png";
        $product->category = "Jewelry";
        $product->name = "Alien Toy Ring#58";
        $product->price = 1890;
        $product->size = 58;
        $product->stock_quantity = 4;
        $product->created_at = "2023-11-03 13:40:07";
        $product->updated_at = "2023-11-03 13:40:07";
        $product->save();

        $product = new Product();
        $product->model_code = "KDNT_BA027RD60";
        $product->image_path = "654a8cf38f336.png";
        $product->category = "Jewelry";
        $product->name = "Alien Toy Ring#60";
        $product->price = 1890;
        $product->size = 60;
        $product->stock_quantity = 5;
        $product->created_at = "2023-11-03 13:40:07";
        $product->updated_at = "2023-11-03 13:40:07";
        $product->save();


        //Candle D100

        $product = new Product();
        $product->model_code = "YU_D100_Alice";
        $product->image_path = "654a8cbae6a7f.png";
        $product->category = "Scented Candle";
        $product->name = "D100 Alice";
        $product->price = 1290;
        $product->size = 226;
        $product->stock_quantity = 22;
        $product->created_at = "2023-11-03 13:40:07";
        $product->updated_at = "2023-11-03 13:40:07";
        $product->save();

        $product = new Product();
        $product->model_code = "YU_D100_Buzz";
        $product->image_path = "654a8cae8c741.png";
        $product->category = "Scented Candle";
        $product->name = "D100 Buzz";
        $product->price = 1290;
        $product->size = 226;
        $product->stock_quantity = 23;
        $product->created_at = "2023-11-03 13:40:07";
        $product->updated_at = "2023-11-03 13:40:07";
        $product->save();

        $product = new Product();
        $product->model_code = "YU_D100_Pooh";
        $product->image_path = "654a8ca4e57f1.png";
        $product->category = "Scented Candle";
        $product->name = "D100 pooh";
        $product->price = 1290;
        $product->size = 226;
        $product->stock_quantity = 20;
        $product->created_at = "2023-11-03 13:40:07";
        $product->updated_at = "2023-11-03 13:40:07";
        $product->save();

        $product = new Product();
        $product->model_code = "YU_D100_Rapanzel";
        $product->image_path = "654a8c9a3bd86.png";
        $product->category = "Scented Candle";
        $product->name = "D100 Rapanzel";
        $product->price = 1290;
        $product->size = 226;
        $product->stock_quantity = 22;
        $product->created_at = "2023-11-03 13:40:07";
        $product->updated_at = "2023-11-03 13:40:07";
        $product->save();

        $product = new Product();
        $product->model_code = "YU_D100_Stitch";
        $product->image_path = "654a8c901481a.png";
        $product->category = "Scented Candle";
        $product->name = "D100 Stitch";
        $product->price = 1290;
        $product->size = 226;
        $product->stock_quantity = 21;
        $product->created_at = "2023-11-03 13:40:07";
        $product->updated_at = "2023-11-03 13:40:07";
        $product->save();


        
        //Candle Mickey

        $product = new Product();
        $product->model_code = "YUMKF_004_DS";
        $product->image_path = "654a8c6ccaeda.png";
        $product->category = "Scented Candle";
        $product->name = "Daisy Candle";
        $product->price = 1290;
        $product->size = 180;
        $product->stock_quantity = 15;
        $product->created_at = "2023-11-03 13:40:07";
        $product->updated_at = "2023-11-03 13:40:07";
        $product->save();

        $product = new Product();
        $product->model_code = "YUMKF_003_DN";
        $product->image_path = "654a8c8725033.png";
        $product->category = "Scented Candle";
        $product->name = "Donald Candle";
        $product->price = 1290;
        $product->size = 180;
        $product->stock_quantity = 4;
        $product->created_at = "2023-11-03 13:40:07";
        $product->updated_at = "2023-11-03 13:40:07";
        $product->save();

        $product = new Product();
        $product->model_code = "YUMKF_005_GF";
        $product->image_path = "654a8c6140b3b.png";
        $product->category = "Scented Candle";
        $product->name = "Goofy Candle";
        $product->price = 1290;
        $product->size = 180;
        $product->stock_quantity = 8;
        $product->created_at = "2023-11-03 13:40:07";
        $product->updated_at = "2023-11-03 13:40:07";
        $product->save();

        $product = new Product();
        $product->model_code = "YUMKF_001_MK";
        $product->image_path = "654a8c579966a.png";
        $product->category = "Scented Candle";
        $product->name = "Mickey Candle";
        $product->price = 1290;
        $product->size = 180;
        $product->stock_quantity = 4;
        $product->created_at = "2023-11-03 13:40:07";
        $product->updated_at = "2023-11-03 13:40:07";
        $product->save();

        $product = new Product();
        $product->model_code = "YUMKF_002_MN";
        $product->image_path = "654a8c4d816b1.png";
        $product->category = "Scented Candle";
        $product->name = "Minnie Candle";
        $product->price = 1290;
        $product->size = 180;
        $product->stock_quantity = 11;
        $product->created_at = "2023-11-03 13:40:07";
        $product->updated_at = "2023-11-03 13:40:07";
        $product->save();

        $product = new Product();
        $product->model_code = "YUMKF_006_PT";
        $product->image_path = "654a8c434f2f8.png";
        $product->category = "Scented Candle";
        $product->name = "Pluto Candle";
        $product->price = 1290;
        $product->size = 180;
        $product->stock_quantity = 9;
        $product->created_at = "2023-11-03 13:40:07";
        $product->updated_at = "2023-11-03 13:40:07";
        $product->save();
        
    }
}
