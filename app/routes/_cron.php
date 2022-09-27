<?php

/**
 * ---------------------------------------------------------
 * Cron Job routes
 * ---------------------------------------------------------.
 *
 * Routes for GET requests to run Cron jobs
 */

/*
 * Check for broken links
 *
 * Sends GET requests to check for broken links
 */
$serve->Router->get('/cron-email-queue/', '\app\controllers\get\Cron@emailQueue', '\app\models\get\Cron');
