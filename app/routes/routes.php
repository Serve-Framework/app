<?php

/**
 * @copyright Joe J. Howard
 * @license   https://github.com/Serve-Framework/Framework/blob/master/LICENSE
 */

use app\controllers\Greeting as GreetingController;
use app\models\Greeting as GreetingModel;

/*
 * ---------------------------------------------------------
 * Example routes
 * ---------------------------------------------------------
 *
 * Examples that come bundled with the framework
 */
$serve->Router->get('/', GreetingController::class . '@get', GreetingModel::class);

$serve->Router->post('/', GreetingController::class . '@post', GreetingModel::class);

/*
 * ---------------------------------------------------------
 * Application routes
 * ---------------------------------------------------------
 *
 * Define your custom application routes here
 */

/**
 * Default CRON setup.
 */
require_once '_cron.php';
