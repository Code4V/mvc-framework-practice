<?php 

namespace App\Core\Exception;


class ForbiddenException extends \Exception
{
    protected $message = 'You don\'t have access to this page';
    protected $code = 403; 
}