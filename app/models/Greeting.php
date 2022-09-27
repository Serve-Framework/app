<?php

/**
 * @copyright Joe J. Howard
 * @license   https://github.com/Serve-Framework/Framework/blob/master/LICENSE
 */

namespace app\models;

use serve\mvc\model\Model;

/**
 * Greeting model.
 *
 * @author Joe J. Howard
 */
class Greeting extends Model
{
    public function validate()
    {
        return true;
    }
}
