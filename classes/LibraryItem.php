<?php

class LibraryItem {

    public string $title;
    public string $author;
    private int $publicationYear;

    public function __construct(String $title, String $author, int $publicationYear) {
        $this->title = $title;
        $this->author = $author;
        if ($this->validateYear($publicationYear)) {
            $this->publicationYear = $publicationYear;
        } else {
            throw new Exception("Invalid Date.");
        }
    }

    public function getTitle(): String {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getAuthor(): String {
        return $this->author;
    }

    public function setAuthor($author) {
        $this->author = $author;
    }

    public function getPublicationYear(): int {
        return $this->publicationYear;
    }

    public function setPublicationYear($publicationYear) {
        if ($this->validateYear($publicationYear)) {
            $this->publicationYear = $publicationYear;
        } else {
            throw new Exception("Invalid Date.");
        }
    }
    
    public function getDetails(): mixed {
        return $this->title . "<br>" . $this->author . "<br>" . $this->publicationYear;
    }
    
    protected function validateYear(int $year): bool {
        $yearString = (string)$year;

        $date = DateTime::createFromFormat("Y", $yearString);
        return $date && $date->format("Y") === $yearString;
    }
    
}