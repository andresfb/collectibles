<?php

namespace Modules\Books\Services;

use App\Services\CollectibleService;
use Modules\Books\Dtos\BookInfo;
use Modules\Books\Models\Book;

class BookService
{
    public function __construct(private readonly CollectibleService $collectibleService)
    {
    }

    public function create(BookInfo $bookInfo): Book
    {
        $collectible = $this->collectibleService->create($bookInfo);

        return new Book();
    }
}
