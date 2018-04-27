<?php
/**
 * Short description for file
 *
 * Long description for file (if any)...
 *
 * LICENSE: Some license information
 *
 * @category   Zend
 * @package    Zend_HtmlPrinter.php
 * @subpackage
 * @copyright  Copyright (c) 2018 ecommistry (http://ecommistry.com)
 * @license    http://framework.zend.com/license   BSD License
 * @version    [version]
 * @link       http://framework.zend.com/package/PackageName
 * @since      File available since Release [version]
 */

class HtmlPrinter implements Printer
{
    public function printPage(Book $book): void
    {
        echo '<div style="single-page">' . $book->getCurrentPage() . '</div>';
    }
}