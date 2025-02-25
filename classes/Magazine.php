<?php

class Magazine extends LibraryItem {

    private int $issueNumber;
    public String $publisher;

    public function __construct(
        string $title, 
        string $author, 
        int $publicationYear,
        int $issueNumber,
        String $publisher
        ) 
        {
        parent::__construct($title, $author, $publicationYear);
        if ($this->validateIssueNumber($issueNumber)) {
            $this->issueNumber = $issueNumber;
        } else {
            throw new Exception("Invalid Issue number.");
        }        
        $this->publisher = $publisher;
    }

    public function getIssueNumber() {
        return $this->issueNumber;
    }

    public function setIssueNumber(int $issueNumber) {
        if ($this->validateIssueNumber($issueNumber)) {
            $this->issueNumber = $issueNumber;
        } else {
            throw new Exception("Invalid Issue number.");
        }
    }

    public function getPublisher(): string {
        return $this->publisher;
    }

    public function setPublisher(String $publisher) {
        $this->publisher = $publisher;
    }

    public function getDetails(): mixed {
        return "<br><br>" . parent::getDetails() . "<br>" . $this->issueNumber . "<br>" . $this->publisher;    
    }

    public function validateIssueNumber($issueNumber): bool {
        return filter_var($issueNumber, FILTER_VALIDATE_INT) !== false;
    }
    


}