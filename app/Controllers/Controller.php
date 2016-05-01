<?php namespace Burrow\Controllers;

use League\Plates\Engine;

/**
 * @author Antony Kalogeropoulos <anthonykalogeropoulos@gmail.com>
 * @since  6/14/2015
 */
class Controller
{
	protected $views;

	public function __construct()
	{
		$engine = new Engine;
		$engine->setDirectory(__DIR__.'/../Views');
		$this->views = $engine;
	}

}