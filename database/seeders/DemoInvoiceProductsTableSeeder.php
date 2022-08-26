<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DemoInvoiceProductsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('invoice_products')->delete();

        \DB::table('invoice_products')->insert([
            0 => [
                'id' => 1,
                'quantity' => 5.0,
                'purchase_price' => 872.49,
                'sale_price' => 950.0,
                'unit_cost' => 1045.0,
                'tax_amount' => 95.0,
                'created_at' => '2022-04-30 23:01:29',
                'updated_at' => '2022-04-30 23:01:29',
                'invoice_id' => 1,
                'product_id' => 1,
            ],
            1 => [
                'id' => 2,
                'quantity' => 5.0,
                'purchase_price' => 960.6,
                'sale_price' => 1200.0,
                'unit_cost' => 1200.0,
                'tax_amount' => 109.09,
                'created_at' => '2022-04-30 23:01:29',
                'updated_at' => '2022-04-30 23:01:29',
                'invoice_id' => 1,
                'product_id' => 2,
            ],
            2 => [
                'id' => 3,
                'quantity' => 5.0,
                'purchase_price' => 1260.6,
                'sale_price' => 1500.0,
                'unit_cost' => 1500.0,
                'tax_amount' => 0.0,
                'created_at' => '2022-04-30 23:01:29',
                'updated_at' => '2022-04-30 23:01:29',
                'invoice_id' => 1,
                'product_id' => 3,
            ],
            3 => [
                'id' => 4,
                'quantity' => 5.0,
                'purchase_price' => 872.49,
                'sale_price' => 950.0,
                'unit_cost' => 1045.0,
                'tax_amount' => 95.0,
                'created_at' => '2022-04-30 23:03:43',
                'updated_at' => '2022-04-30 23:03:43',
                'invoice_id' => 2,
                'product_id' => 1,
            ],
            4 => [
                'id' => 5,
                'quantity' => 5.0,
                'purchase_price' => 960.6,
                'sale_price' => 1200.0,
                'unit_cost' => 1200.0,
                'tax_amount' => 109.09,
                'created_at' => '2022-04-30 23:03:43',
                'updated_at' => '2022-04-30 23:03:43',
                'invoice_id' => 2,
                'product_id' => 2,
            ],
            5 => [
                'id' => 6,
                'quantity' => 5.0,
                'purchase_price' => 1260.6,
                'sale_price' => 1500.0,
                'unit_cost' => 1500.0,
                'tax_amount' => 0.0,
                'created_at' => '2022-04-30 23:03:43',
                'updated_at' => '2022-04-30 23:03:43',
                'invoice_id' => 2,
                'product_id' => 3,
            ],
            6 => [
                'id' => 7,
                'quantity' => 5.0,
                'purchase_price' => 872.49,
                'sale_price' => 950.0,
                'unit_cost' => 1045.0,
                'tax_amount' => 95.0,
                'created_at' => '2022-04-30 23:04:18',
                'updated_at' => '2022-04-30 23:04:18',
                'invoice_id' => 3,
                'product_id' => 1,
            ],
            7 => [
                'id' => 8,
                'quantity' => 5.0,
                'purchase_price' => 960.6,
                'sale_price' => 1200.0,
                'unit_cost' => 1200.0,
                'tax_amount' => 109.09,
                'created_at' => '2022-04-30 23:04:18',
                'updated_at' => '2022-04-30 23:04:18',
                'invoice_id' => 3,
                'product_id' => 2,
            ],
            8 => [
                'id' => 9,
                'quantity' => 5.0,
                'purchase_price' => 1260.6,
                'sale_price' => 1500.0,
                'unit_cost' => 1500.0,
                'tax_amount' => 0.0,
                'created_at' => '2022-04-30 23:04:18',
                'updated_at' => '2022-04-30 23:04:18',
                'invoice_id' => 3,
                'product_id' => 3,
            ],
            9 => [
                'id' => 10,
                'quantity' => 5.0,
                'purchase_price' => 872.49,
                'sale_price' => 950.0,
                'unit_cost' => 1045.0,
                'tax_amount' => 95.0,
                'created_at' => '2022-04-30 23:05:00',
                'updated_at' => '2022-04-30 23:05:00',
                'invoice_id' => 4,
                'product_id' => 1,
            ],
            10 => [
                'id' => 11,
                'quantity' => 5.0,
                'purchase_price' => 960.6,
                'sale_price' => 1200.0,
                'unit_cost' => 1200.0,
                'tax_amount' => 109.09,
                'created_at' => '2022-04-30 23:05:00',
                'updated_at' => '2022-04-30 23:05:00',
                'invoice_id' => 4,
                'product_id' => 2,
            ],
            11 => [
                'id' => 12,
                'quantity' => 5.0,
                'purchase_price' => 1260.6,
                'sale_price' => 1500.0,
                'unit_cost' => 1500.0,
                'tax_amount' => 0.0,
                'created_at' => '2022-04-30 23:05:00',
                'updated_at' => '2022-04-30 23:05:00',
                'invoice_id' => 4,
                'product_id' => 3,
            ],
            12 => [
                'id' => 13,
                'quantity' => 5.0,
                'purchase_price' => 872.49,
                'sale_price' => 950.0,
                'unit_cost' => 1045.0,
                'tax_amount' => 95.0,
                'created_at' => '2022-05-01 04:57:44',
                'updated_at' => '2022-05-01 04:57:44',
                'invoice_id' => 5,
                'product_id' => 1,
            ],
            13 => [
                'id' => 14,
                'quantity' => 5.0,
                'purchase_price' => 960.6,
                'sale_price' => 1200.0,
                'unit_cost' => 1200.0,
                'tax_amount' => 109.09,
                'created_at' => '2022-05-01 04:57:44',
                'updated_at' => '2022-05-01 04:57:44',
                'invoice_id' => 5,
                'product_id' => 2,
            ],
            14 => [
                'id' => 15,
                'quantity' => 5.0,
                'purchase_price' => 1260.6,
                'sale_price' => 1500.0,
                'unit_cost' => 1500.0,
                'tax_amount' => 0.0,
                'created_at' => '2022-05-01 04:57:44',
                'updated_at' => '2022-05-01 04:57:44',
                'invoice_id' => 5,
                'product_id' => 3,
            ],
            15 => [
                'id' => 16,
                'quantity' => 10.0,
                'purchase_price' => 877.85,
                'sale_price' => 950.0,
                'unit_cost' => 1045.0,
                'tax_amount' => 95.0,
                'created_at' => '2022-05-01 05:06:05',
                'updated_at' => '2022-05-01 05:06:05',
                'invoice_id' => 6,
                'product_id' => 1,
            ],
            16 => [
                'id' => 17,
                'quantity' => 10.0,
                'purchase_price' => 953.03,
                'sale_price' => 1200.0,
                'unit_cost' => 1200.0,
                'tax_amount' => 109.09,
                'created_at' => '2022-05-01 05:06:05',
                'updated_at' => '2022-05-01 05:06:05',
                'invoice_id' => 6,
                'product_id' => 2,
            ],
            17 => [
                'id' => 18,
                'quantity' => 10.0,
                'purchase_price' => 1145.89,
                'sale_price' => 1500.0,
                'unit_cost' => 1500.0,
                'tax_amount' => 0.0,
                'created_at' => '2022-05-01 05:06:05',
                'updated_at' => '2022-05-01 05:06:05',
                'invoice_id' => 6,
                'product_id' => 3,
            ],
        ]);
    }
}
