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
    /**
     * Greeting GET request.
     */
    public function get(): void
    {
        $this->fileResponse(SERVE_APPLICATION_PATH . '/views/Greeting.php');
    }

    /**
     * Greeting POST request to run PHP unit tests.
     */
    public function post(): void
    {
        $response = $this->model->runTest();

        if ($response)
        {
            $this->jsonResponse(['response' => 'valid', 'details' => $response]);

            return;
        }

        $this->notFoundResponse();
    }
}
