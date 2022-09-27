<?php

/**
 * @copyright Joe J. Howard
 * @license   https://github.com/Serve-Framework/Framework/blob/master/LICENSE
 */

namespace app\models;

use serve\common\SqlBuilderTrait;
use serve\mvc\model\Model;

/**
 * Cron Job Model.
 *
 * @author Joe J. Howard
 */
class Cron extends Model
{
    use SqlBuilderTrait;

    /**
     * Validates the URL key provided the application secret.
     *
     * @return bool
     */
    public function validate(): bool
    {
        return $this->Request->queries('key') === $this->Config->get('application.secret');
    }

    /**
     * Handles email queue processing.
     */
    public function emailQueue(): void
    {
        // Process email queue here

        $this->Response->status()->set(200);

        $this->Response->format()->set('txt');

        $this->Response->body()->set('Cron Jobs Completed');
    }
}
