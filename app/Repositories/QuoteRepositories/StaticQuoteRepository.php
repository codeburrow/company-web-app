<?php namespace Burrow\Repositories\QuoteRepositories;
/**
 * @author Antony Kalogeropoulos
 * @since 2/17/2016
 * Time: 7:50 PM
 */

class StaticQuoteRepository implements QuoteRepository
{
    private $quotes;

    public function __construct()
    {
        $this->quotes = require __DIR__ . '/../../storage/quotes.php';
    }

    public function getRandom()
    {
        return $this->quotes[array_rand($this->quotes)];
    }
}