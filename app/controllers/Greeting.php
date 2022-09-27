<?php

/**
 * @copyright Joe J. Howard
 * @license   https://github.com/Serve-Framework/Framework/blob/master/LICENSE
 */

namespace app\controllers;

use serve\mvc\controller\Controller;

/**
 * Greeting controller.
 *
 * @author Joe J. Howard
 */
class Greeting extends Controller
{
	public function welcome(): void
	{
		$this->fileResponse(SERVE_APPLICATION_PATH . '/views/Greeting.php');
	}
}
