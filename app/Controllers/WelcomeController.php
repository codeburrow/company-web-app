<?php namespace Burrow\Controllers;

use Swift_Mailer;
use Swift_Message;
use Burrow\Repositories\QuoteRepositories\StaticQuoteRepository;
use Burrow\Repositories\UserRepositories\StaticUserRepository;
use Swift_SmtpTransport;

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
		$title = 'CodeBurrow';

		$users = $this->userRepository->getAll();

		shuffle($users);

		$randomQuote = $this->quotesRepository->getRandom();

		return $this->views->render('main', compact('users', 'title', 'randomQuote'));
	}

	public function formPost()
	{
		// Create the Transport
		$transport = Swift_SmtpTransport::newInstance('smtp.secureserver.net.', 25)
//			->setUsername('your username')
//			->setPassword('your password')
		;

		// Create the Mailer using your created Transport
		$mailer = Swift_Mailer::newInstance($transport);

		// Create the message
		$message = Swift_Message::newInstance()
			// Give the message a subject
			->setSubject('Email From CodeBurrow: ' . $_POST['subject'])
			// Set the From address with an associative array
			->setFrom(array( $_POST['email'] => $_POST['name'] ))
			// Set the To addresses with an associative array
			->setTo(array('support@codeburrow.com' => 'CodeBurrow Support Team'))
			// Give it a body
			->setBody($_POST['message']);

		// Optionally add any attachments
//			->attach(Swift_Attachment::fromPath('my-document.pdf'))

		// Send the message
		/**
		 * @var \Swift_Mime_Message $message
		 */
		$result = $mailer->send($message);;

		require( '../Functions/FlashMsg.php' );
		//Confirm Email Sent
		if ($result > 0) {
			flash( 'example_message', 'This content will show up on example2.php' );
            flash( 'example_message' );


echo "Mail Sent. Thank you ";
		} else {
			echo "Form submission unsuccessful";
		}

	}

	public function getParameters()
	{
		ddd($_GET);
	}

	public function return404()
	{
		return $this->views->render('view404');
	}
	
	public function showBlog()
	{
		$title = 'Blog';

		return $this->views->render('blog', compact('title'));
	}
}