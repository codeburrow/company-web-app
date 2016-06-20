<?php namespace Burrow\Controllers;

use Burrow\Database\DB;
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

    protected $DB;

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
		//Check if $_POST is empty and sanitize
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$subject = $_POST['subject'];

		if(!empty($name) && !empty($email) && !empty($message) && !empty($subject)) {
			$cleanName = filter_var($name, FILTER_SANITIZE_STRING);
			$cleanEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
			$cleanMessage = filter_var($message, FILTER_SANITIZE_STRING);
			$cleanSubject = filter_var($subject, FILTER_SANITIZE_STRING);
		} else {
			$messageError = "Error. All Fields Are Required.";

			return $this->views->render('main', compact('messageError'));
		}
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
			->setSubject('Email From CodeBurrow: ' . $cleanSubject)
			// Set the From address with an associative array
			->setFrom(array( $cleanEmail => $cleanName ))
			// Set the To addresses with an associative array
			->setTo(array('support@codeburrow.com' => 'CodeBurrow Support Team'))
			// Give it a body
			->setBody($cleanMessage);

		// Optionally add any attachments
//			->attach(Swift_Attachment::fromPath('my-document.pdf'))

		// Send the message
		/**
		 * @var \Swift_Mime_Message $message
		 */
		$result = $mailer->send($message);;

		//Confirm Email Sent
		if ($result > 0) {
			$messageSuccess = "Thank you for your email.\n We'll be in touch soon.";

			return $this->views->render('main', compact('messageSuccess'));
		} else {
			$messageError = "There was an error. We couldn't send your email. \n Please contact us at 'support@codeburrow.com'.";

			return $this->views->render('main', compact('messageError'));
		}
	}

//	public function getGlobals() {
//
//		$indicesServer = array('PHP_SELF',
//			'argv',
//			'argc',
//			'GATEWAY_INTERFACE',
//			'SERVER_ADDR',
//			'SERVER_NAME',
//			'SERVER_SOFTWARE',
//			'SERVER_PROTOCOL',
//			'REQUEST_METHOD',
//			'REQUEST_TIME',
//			'REQUEST_TIME_FLOAT',
//			'QUERY_STRING',
//			'DOCUMENT_ROOT',
//			'HTTP_ACCEPT',
//			'HTTP_ACCEPT_CHARSET',
//			'HTTP_ACCEPT_ENCODING',
//			'HTTP_ACCEPT_LANGUAGE',
//			'HTTP_CONNECTION',
//			'HTTP_HOST',
//			'HTTP_REFERER',
//			'HTTP_USER_AGENT',
//			'HTTPS',
//			'REMOTE_ADDR',
//			'REMOTE_HOST',
//			'REMOTE_PORT',
//			'REMOTE_USER',
//			'REDIRECT_REMOTE_USER',
//			'SCRIPT_FILENAME',
//			'SERVER_ADMIN',
//			'SERVER_PORT',
//			'SERVER_SIGNATURE',
//			'PATH_TRANSLATED',
//			'SCRIPT_NAME',
//			'REQUEST_URI',
//			'PHP_AUTH_DIGEST',
//			'PHP_AUTH_USER',
//			'PHP_AUTH_PW',
//			'AUTH_TYPE',
//			'PATH_INFO',
//			'ORIG_PATH_INFO') ;
//
//		echo '<table cellpadding="10">' ;
//		foreach ($indicesServer as $arg) {
//			if (isset($_SERVER[$arg])) {
//				echo '<tr><td>'.$arg.'</td><td>' . $_SERVER[$arg] . '</td></tr>' ;
//			}
//			else {
//				echo '<tr><td>'.$arg.'</td><td>-</td></tr>' ;
//			}
//		}
//		echo '</table>' ;
//
//	}

//	public function getParameters()
//	{
//		ddd($_GET);
//	}

	public function return404()
	{
		return $this->views->render('view404');
	}
	
	public function showBlog()
	{
        $this->DB = new DB();

        $posts = $this->DB->getAllPosts();
        
        $title = 'Blog';

		return $this->views->render('blog', compact('title', 'posts'));
	}

	public function admin()
	{
        $this->DB = new DB();

        $posts = $this->DB->getAllPosts();

        return $this->views->render('admin', compact('posts'));
    }

    public function adminPost()
    {
        $this->DB = new DB();
        
        $this->DB->updatePost($_POST);
    }
}