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
//		$title = 'Code Burrow';
//
//		$users = $this->userRepository->getAll();
//
//		shuffle($users);
//
//		$randomQuote = $this->quotesRepository->getRandom();
//
//		if ( isset($_POST) ) {
//			$to = "support@codeburrow.com"; // this is your Email address
//			$from = $_POST['email']; // this is the sender's Email address
//			$name = $_POST['name'];
//			$subject = "Message From CodeBurrow:" . $_POST['subject'];
//			$subject2 = "Copy of Your Message to CodeBurrow.com: " . $_POST['subject'];
//			$message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
//			$message2 = $name . ", here is a copy of your message: " . "\n\n" . $_POST['message'];
//
//			$headers = "From:" . $from;
//			$headers2 = "From:" . $to;
//			mail($to, $subject, $message, $headers);
//			mail($from, $subject2, $message2, $headers2); // sends a copy of the message to the sender
//			echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
//			// You can also use header('Location: thank_you.php'); to redirect to another page.
//			// You cannot use header and echo together. It's one or the other.
//		} else {
//			echo "Form submission unsuccessful";
//		}

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
			->setTo(array('support@codeburrow.com' => 'Antony Kalogeropoulos'))
			// Give it a body
			->setBody($_POST['message']);

		// Optionally add any attachments
//			->attach(Swift_Attachment::fromPath('my-document.pdf'))

		// Send the message
		/**
		 * @var \Swift_Mime_Message $message
		 */
		$result = $mailer->send($message);;

		//Confirm Email Sent
		if ($result > 0) {
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