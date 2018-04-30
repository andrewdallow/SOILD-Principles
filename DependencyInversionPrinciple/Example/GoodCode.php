<?php

namespace DIP;
/**
 * Interface Readable implemented by any readable book.
 */
interface Readable
{
    public function read(): string;
}

/**
 * Class representing the pdf eBook
 */
class PdfBook implements Readable
{
    public function read(): string
    {
        return 'reading a pdf book';
    }
}

/**
 * Class representing the pdf eBook
 */
class MobiBook implements Readable
{
    public function read(): string
    {
        return 'reading a mobi book';
    }
}

/**
 * The pdf eBook reader class
 */
class EBookReader
{
    /** @var Readable */
    private $_book;

    public function __construct(Readable $book)
    {
        $this->_book = $book;
    }

    public function read(): string
    {
        return $this->_book->read();
    }
}

class BookFactory
{
    public static function getEBook(String $type): Readable
    {
        if ($type === 'pdf') {
            return new PdfBook();
        }

        if ($type === 'mobi') {
            return new MobiBook();
        }

        throw new \Exception('Book type not found');
    }
}

class TestEBookReader
{
    public static function main(): void
    {
        try {
            $pdf = BookFactory::getEBook('pdf');
            $mobi = BookFactory::getEBook('mobi');

        } catch (\Exception $exception) {
            echo $exception->getMessage();
        }

        $pdfEReader = NEW EBookReader($pdf);
        $mobiEReader = NEW EBookReader($mobi);

        echo '<p>';
        echo $pdfEReader->read();
        echo '</p>';
        echo '<p>';
        echo $mobiEReader->read();
        echo '</p>';

    }
}