<?php

class Book
{
    private $title;
    private $author;
    private $pageNumber;
    private $content;


    public function __construct(string $title, string $author, string $content)
    {
        $this->title = $title;
        $this->author = $author;
        $this->content = $content;
        $this->pageNumber = 1;
    }

    public function turnPage(): void
    {
        $this->pageNumber++;
        echo 'Page number: ' . $this->pageNumber;
    }

    public function getCurrentPage(): void
    {
        echo $this->content;
    }

}