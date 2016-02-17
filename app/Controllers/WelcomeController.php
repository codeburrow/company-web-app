<?php namespace Burrow\Controllers;

use Burrow\Repositories\QuoteRepositories\StaticQuoteRepository;
use Burrow\Repositories\UserRepositories\StaticUserRepository;

/**
 * @author Antony Kalogeropoulos
 * @since 2/17/2016
 */
class WelcomeController extends Controller
{
    private $userRepository;
    private $quotesRepository;

    public function __construct()
    {
        parent::__construct();


        $this->userRepository = new StaticUserRepository();
        $this->quotesRepository = new StaticQuoteRepository();
    }

    /**
     * Show all users
     */
    public function index()
    {
        $title = 'HubIT Club';

        $users = $this->userRepository->getAll();

        shuffle($users);

        $randomQuote = $this->quotesRepository->getRandom();

        return $this->views->render('welcome', compact('users', 'title', 'randomQuote'));
    }
}