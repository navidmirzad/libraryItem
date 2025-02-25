<?php

class Book extends LibraryItem {

    private string $isbn;
    public int $pages;

    public function __construct(
        String $title, 
        String $author, 
        int $publicationYear, 
        String $isbn,
        int $pages
        )
    {
        parent::__construct($title, $author, $publicationYear);
        if ($this->validateIsnb($isbn)) {
            $this->isbn = $isbn;
        } else {
            throw new Exception("Invalid ISBN.");
        }
        $this->pages = $pages;
    }

    public function getIsbn(): String {
        return $this->isbn;
    }

    public function setIsbn(int $isbn) {
        if ($this->validateIsnb($isbn)) {
            $this->isbn = $isbn;
        } else {
            throw new Exception("Invalid ISBN.");
        }
    }

    public function getPages() {
        return $this->pages;
    }

    public function setPages(int $pages) {
        $this->pages = $pages;
    }

    public function getDetails(): mixed {
        return "<br><br>" . parent::getDetails() . "<br>" . $this->isbn . "<br>" . $this->pages;    
    }

    public function validateIsnb(int $isbn): bool {
        $isbnString = (string)$isbn;

        return strlen($isbnString) === 13;
    }

}