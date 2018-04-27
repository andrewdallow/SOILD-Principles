<?php

/**
 * Handle Plain text printing.
 */
class PlainTextPrinter implements Printer
{
    public function printPage(Book $book)
    {
        echo $book->getCurrentPage();
    }
}