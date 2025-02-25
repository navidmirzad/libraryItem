<?php

class DVD extends LibraryItem {

    private int $duration;
    public String $format;

    public function __construct(string $title, string $author, int $publicationYear, int $duration, String $format) {
        parent::__construct($title, $author, $publicationYear);
        $this->duration = $duration;
        $this->format = $format;
    }

    public function getDuration(): int {
        return $this->duration;
    }

    public function setDuration(int $duration) {
        if ($this->validateDuration($duration)) {
            $this->duration = $duration;
        } else {
            throw new Exception("Invalid duration.");
        }
    }

    public function getFormat() {
        return $this->format;
    }

    public function setFormat(String $format) {
        $this->format = $format;
    }

    public function getDetails(): mixed {
        return  "<br><br>" . parent::getDetails() . "<br>" . $this->duration . "<br>" . $this->format;
    }

    public function validateDuration(int $duration): bool {
        if ($duration > 0 && $duration <= 500) {
            return true;
        } else {
            throw new Exception("Invalid duration.");
        }
    }
}