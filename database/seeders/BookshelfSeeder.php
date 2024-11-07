<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bookshelf;

class BookshelfSeeder extends Seeder
{
    public function run()
    {
        Bookshelf::create(['code' => 'A01', 'name' => 'Malam Pertama Dialam Kubur']);
        Bookshelf::create(['code' => 'B02', 'name' => 'Kisah Nabi Dan Rosul']);
    }
}