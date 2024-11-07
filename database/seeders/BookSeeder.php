<?php



namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Category;

class BookSeeder extends Seeder
{
    public function run()
    {
        // Membuat buku baru
       Book::create([
            'title' => 'Cahaya abadi',
            'author' => 'Tere Liye',
            'year' => 2000,
            'publisher' => 'cahaya abadi jaya',
            'city' => 'jamaras',
            'cover' => 'pidi baiq',
            'bookshelves_id' => 1,
        ]);

 
    }
}


