<?php
/**
 * ModelException.php
 *
 * @author      Jepi Humet Alsius <jepihumet@gmail.com>
 * @link        http://jepihumet.com
 */
namespace Jepi\Model;

use Jepi\Exception\Exception;

class ModelException extends Exception
{
    protected $exceptionType = "Model Exception";
}