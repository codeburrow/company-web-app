<?php namespace Burrow\Controllers;

use Burrow\Repositories\QuoteRepositories\StaticQuoteRepository;
use Burrow\Repositories\UserRepositories\StaticUserRepository;

/**
 * @author Antony Kalogeropoulos
 * @since 2/17/2016
 */
class WelcomeController extends Controller
{
	/**
	 * @var StaticUserRepository
	 */
	private $userRepository;
	/**
	 * @var StaticQuoteRepository
	 */
	private $quotesRepository;

	/**
	 * WelcomeController constructor.
	 */
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
		$title = 'Code Burrow';

		$users = $this->userRepository->getAll();

		shuffle($users);

		$randomQuote = $this->quotesRepository->getRandom();

		return $this->views->render('welcome', compact('users', 'title', 'randomQuote'));
	}

	public function formPost()
    {
        $title = 'Code Burrow';

        $users = $this->userRepository->getAll();

        shuffle($users);

        $randomQuote = $this->quotesRepository->getRandom();

	    var_dump($_POST);

	    print_r($_POST['name']);

	    echo "Hello bbq";
//        return $this->views->render('welcome', compact('users', 'title', 'randomQuote'));
    }

	public function getParameters()
	{
		ddd($_GET);
	}

	public function return404()
	{

		return 'I need to create a nice view for the 404 errors';
	}
}