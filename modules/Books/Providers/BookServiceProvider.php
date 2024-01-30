<?php

namespace Modules\Books\Providers;

use Illuminate\Support\ServiceProvider;

class BookServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');

        $this->mergeConfigFrom(__DIR__ . '/../Config/config.php', 'books');
    }
}






// TODO: create the book_genres table
// TODO: create the book_formats table
// TODO: create the book_services table
// TODO: create the book_editions table
// TODO: create the book_series table
// TODO: create the books table
// TODO: add all the pivot tables for the above tables
// TODO: add a pivot table for books and authors






//CREATE TABLE Book (
//    BookID INT PRIMARY KEY,
//    CollectibleID INT UNIQUE,
//    Author VARCHAR(100),
//    Publisher VARCHAR(100),
//    Genre VARCHAR(50),
//    Format VARCHAR(50),
//    Pages INT,
//    ISBN VARCHAR(20),
//    FOREIGN KEY (CollectibleID) REFERENCES Collectible(CollectibleID)
//);
