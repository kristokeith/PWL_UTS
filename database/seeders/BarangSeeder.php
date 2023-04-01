<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Barang::create([
            'kode_barang' => 'KC001',
            'nama_barang' => 'Indomie',
            'kategori_barang' => 'Makanan',
            'harga' => '2500',
            'qty' => '156',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
        Barang::create([
            'kode_barang' => 'KC002',
            'nama_barang' => 'Fanta',
            'kategori_barang' => 'Minuman',
            'harga' => '7000',
            'qty' => '81',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
        Barang::create([
            'kode_barang' => 'KC003',
            'nama_barang' => 'Chiki Ball',
            'kategori_barang' => 'Snack',
            'harga' => '2000',
            'qty' => '29',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
        Barang::create([
            'kode_barang' => 'KC004',
            'nama_barang' => 'Panadol',
            'kategori_barang' => 'Obat',
            'harga' => '15000',
            'qty' => '48',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
        Barang::create([
            'kode_barang' => 'KC005',
            'nama_barang' => 'Coca Cola',
            'kategori_barang' => 'Minuman',
            'harga' => '7500',
            'qty' => '33',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
        Barang::create([
            'kode_barang' => 'KC006',
            'nama_barang' => 'Fruit Tea',
            'kategori_barang' => 'Minuman',
            'harga' => '5000',
            'qty' => '40',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
        Barang::create([
            'kode_barang' => 'KC007',
            'nama_barang' => 'Sarden ABC',
            'kategori_barang' => 'Makanan',
            'harga' => '11000',
            'qty' => '70',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
        Barang::create([
            'kode_barang' => 'KC008',
            'nama_barang' => 'Antimo',
            'kategori_barang' => 'Obat',
            'harga' => '1500',
            'qty' => '69',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
        Barang::create([
            'kode_barang' => 'KC009',
            'nama_barang' => 'Beng Beng',
            'kategori_barang' => 'Snack',
            'harga' => '2900',
            'qty' => '104',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
        Barang::create([
            'kode_barang' => 'KC010',
            'nama_barang' => 'Oreo BlackPink',
            'kategori_barang' => 'Snack',
            'harga' => '2850',
            'qty' => '104',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
        Barang::create([
            'kode_barang' => 'KC011',
            'nama_barang' => 'Whiskas',
            'kategori_barang' => 'Makanan',
            'harga' => '15000',
            'qty' => '12',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
        Barang::create([
            'kode_barang' => 'KC012',
            'nama_barang' => 'Baso Aci Shanty',
            'kategori_barang' => 'Makanan',
            'harga' => '20000',
            'qty' => '23',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
        Barang::create([
            'kode_barang' => 'KC013',
            'nama_barang' => 'Nalgestan',
            'kategori_barang' => 'Obat',
            'harga' => '9500',
            'qty' => '45',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
        Barang::create([
            'kode_barang' => 'KC014',
            'nama_barang' => 'Sprite',
            'kategori_barang' => 'Minuman',
            'harga' => '8000',
            'qty' => '30',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
        Barang::create([
            'kode_barang' => 'KC015',
            'nama_barang' => 'Bakmi Mewah',
            'kategori_barang' => 'Makanan',
            'harga' => '16000',
            'qty' => '8',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
        Barang::create([
            'kode_barang' => 'KC016',
            'nama_barang' => 'Samyang',
            'kategori_barang' => 'Makanan',
            'harga' => '14500',
            'qty' => '21',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
        Barang::create([
            'kode_barang' => 'KC017',
            'nama_barang' => 'Qtela',
            'kategori_barang' => 'Snack',
            'harga' => '7850',
            'qty' => '122',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
        Barang::create([
            'kode_barang' => 'KC018',
            'nama_barang' => 'Nuttela Import',
            'kategori_barang' => 'Snack',
            'harga' => '125000',
            'qty' => '5',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
        Barang::create([
            'kode_barang' => 'KC019',
            'nama_barang' => 'Enervon-C',
            'kategori_barang' => 'Obat',
            'harga' => '35500',
            'qty' => '41',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
        Barang::create([
            'kode_barang' => 'KC020',
            'nama_barang' => 'Neurobuon Forte',
            'kategori_barang' => 'Obat',
            'harga' => '36500',
            'qty' => '49',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
    }
}
