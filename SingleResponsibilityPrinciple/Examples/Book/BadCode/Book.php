<?php

class Book
{
    private $title;
    private $author;
    private $pageNumber;
    private $content;


    public function __construct(string $title, string $author)
    {
        $this->title = $title;
        $this->author = $author;
        $this->pageNumber = 1;
    }

    public function turnPage(): void
    {
        $this->pageNumber++;
        echo 'Page number: ' . $this->pageNumber;
    }

    public function getCurrentPage(): void
    {
        if ('html') {
            //do html
        } elseif ('plaintext') {
            //do plain text
        } else {
            //some other format
        }

    }

}