<?php

/**
 * @copyright Joe J. Howard
 * @license   https://github.com/Serve-Framework/Framework/blob/master/LICENSE
 */

namespace app\controllers;

use serve\mvc\controller\Controller;

/**
 * Cron job controller.
 *
 * @author Joe J. Howard
 */
class Cron extends Controller
{
	/**
	 * Handle GET request to process email queue.
	 */
	public function emailQueue()
	{
		if ($this->model->validate())
		{
			$this->model->emailQueue();

			return true;
		}

		$this->notFoundResponse();
	}
}
