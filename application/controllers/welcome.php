<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once('application.php');

/**
 * Class Welcome
 */
class Welcome extends ApplicationController {

    function __construct()
    {
        parent::__construct();
    }

    public function index()
	{
        $this->go('home');
	}
}

