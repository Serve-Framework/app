<?php

/**
 * @copyright Joe J. Howard
 * @license   https://github.com/Serve-Framework/Framework/blob/master/LICENSE
 */

namespace app\models;

use serve\http\response\exceptions\RequestException;
use serve\mvc\model\Model;
use serve\shell\Shell;

/**
 * Greeting model.
 *
 * @author Joe J. Howard
 */
class Greeting extends Model
{
    /**
     * Greeting POST request to run PHP unit tests.
     */
    public function runTest(): string
    {
        $rules =
        [
            'name' => ['required'],
        ];

        $filters =
        [
            'name' => ['string', 'trim'],
        ];

        $validator = $this->Validator->create($this->Request->fetch(), $rules, $filters);

        if (!$this->Request->isAjax())
        {
            throw new RequestException(500, 'Bad POST Request. Request was not made over AJAX.');
        }

        $this->Response->format()->set('json');
        
        if (!$validator->isValid())
        {
            throw new RequestException(500, 'Bad POST Request. POST fields did not meet validation. ' . implode(' ', $validator->getErrors()));
        }

        $validated_data = $validator->filter();

        if (!isset($validated_data['name']) || empty($validated_data['name']))
        {
            throw new RequestException(500, 'Bad POST Request. Test name not supplied.');
        }

        $testname = $validated_data['name'];

        $shell = new Shell(dirname(SERVE_APPLICATION_PATH));

        $output = $shell->cmd('php', 'vendor/bin/phpunit')->option('filter', $testname)->run(true);

        return $output;
    }
}
