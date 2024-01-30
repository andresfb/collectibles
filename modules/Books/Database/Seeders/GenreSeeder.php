<?php

namespace Modules\Books\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GenreSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('genres')->insert([
            ['name' => 'Art', 'slug' => Str::slug('Art')],
            ['name' => 'Biography', 'slug' => Str::slug('Biography')],
            ['name' => 'Business', 'slug' => Str::slug('Business')],
            ['name' => 'Chick Lit', 'slug' => Str::slug('Chick Lit')],
            ['name' => "Children's", 'slug' => Str::slug("Children's")],
            ['name' => 'Christian', 'slug' => Str::slug('Christian')],
            ['name' => 'Classics', 'slug' => Str::slug('Classics')],
            ['name' => 'Comics', 'slug' => Str::slug('Comics')],
            ['name' => 'Contemporary', 'slug' => Str::slug('Contemporary')],
            ['name' => 'Cookbooks', 'slug' => Str::slug('Cookbooks')],
            ['name' => 'Crime', 'slug' => Str::slug('Crime')],
            ['name' => 'Dystopian', 'slug' => Str::slug('Dystopian')],
            ['name' => 'Erotic', 'slug' => Str::slug('Erotic')],
            ['name' => 'Fantasy', 'slug' => Str::slug('Fantasy')],
            ['name' => 'Fiction', 'slug' => Str::slug('Fiction')],
            ['name' => 'Gay and Lesbian', 'slug' => Str::slug('Gay and Lesbian')],
            ['name' => 'Graphic Novels', 'slug' => Str::slug('Graphic Novels')],
            ['name' => 'Historical Fiction', 'slug' => Str::slug('Historical Fiction')],
            ['name' => 'History', 'slug' => Str::slug('History')],
            ['name' => 'Horror', 'slug' => Str::slug('Horror')],
            ['name' => 'Humor and Comedy', 'slug' => Str::slug('Humor and Comedy')],
            ['name' => 'Literary', 'slug' => Str::slug('Literary')],
            ['name' => 'Manga', 'slug' => Str::slug('Manga')],
            ['name' => 'Memoir', 'slug' => Str::slug('Memoir')],
            ['name' => 'Music', 'slug' => Str::slug('Music')],
            ['name' => 'Mystery', 'slug' => Str::slug('Mystery')],
            ['name' => 'Nonfiction', 'slug' => Str::slug('Nonfiction')],
            ['name' => 'Paranormal', 'slug' => Str::slug('Paranormal')],
            ['name' => 'Philosophy', 'slug' => Str::slug('Philosophy')],
            ['name' => 'Poetry', 'slug' => Str::slug('Poetry')],
            ['name' => 'Psychology', 'slug' => Str::slug('Psychology')],
            ['name' => 'Religion', 'slug' => Str::slug('Religion')],
            ['name' => 'Romance', 'slug' => Str::slug('Romance')],
            ['name' => 'Science', 'slug' => Str::slug('Science')],
            ['name' => 'Science Fiction', 'slug' => Str::slug('Science Fiction')],
            ['name' => 'Self Help', 'slug' => Str::slug('Self Help')],
            ['name' => 'Suspense', 'slug' => Str::slug('Suspense')],
            ['name' => 'Spirituality', 'slug' => Str::slug('Spirituality')],
            ['name' => 'Sports', 'slug' => Str::slug('Sports')],
            ['name' => 'Thriller', 'slug' => Str::slug('Thriller')],
            ['name' => 'Travel', 'slug' => Str::slug('Travel')],
            ['name' => 'Young Adult', 'slug' => Str::slug('Young Adult')],
        ]);
    }
}
