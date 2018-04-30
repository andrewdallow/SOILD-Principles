<?php

/**
 * Class representing the pdf eBook
 */
class PdfBook
{
    public function read(): string
    {
        return 'reading a pdf book';
    }
}

/**
 * The pdf eBook reader class
 */
class PdfReader
{
    /** @var PdfBook */
    private $_book;

    public function __construct(PdfBook $book)
    {
        $this->_book = $book;
    }

    public function read(): string
    {
        return $this->_book->read();
    }
}