<?php

namespace Modules\Books\Dtos;

use App\Dtos\CollectibleInfo;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;

class BookInfo extends CollectibleInfo
{
    private string $title = '';
    private string $description = '';
    private ?Carbon $publishedAt = null;
    private readonly Collection $authors;

    private function __construct()
    {
        parent::__construct();
        $this->authors = collect();
    }

    public static function create(): static
    {
        return new self();
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): BookInfo
    {
        $this->title = $title;
        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): BookInfo
    {
        $this->description = $description;
        return $this;
    }

    public function getPublishedAt(): ?Carbon
    {
        return $this->publishedAt;
    }

    public function setPublishedAt(?Carbon $publishedAt): BookInfo
    {
        $this->publishedAt = $publishedAt;

        if ($publishedAt !== null) {
            $this->setReleaseYear($publishedAt->year);
        }

        return $this;
    }

    public function getAuthors(): Collection
    {
        return $this->authors;
    }

    public function setAuthor(AuthorInfo $author): BookInfo
    {
        $this->authors->add($author);
        return $this;
    }

    public function toArray(): array
    {
        return [
            'title' => $this->title,
            'description' => $this->description,
            'published_at' => $this->publishedAt,
            'authors' => $this->authors->toArray(),
        ];
    }
}
