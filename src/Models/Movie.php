<?php

namespace App\Models;

class Movie
{
    public function __construct(
        private int $id,
        private string $name,
        private string $description,
        private string $preview,
        private string $categoryId
    ) {
    }

    public function id(): int
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function description(): string
    {
        return $this->description;
    }

    public function preview(): string
    {
        return $this->preview;
    }

    public function categoryId(): string
    {
        return $this->categoryId;
    }
}