<?php

namespace App\Mailer;

use Psr\Log\LoggerInterface;

class Emailer
{

    /**
     * @var string
     */
    private $myParameter;
    /**
     * @var LoggerInterface
     */
    private $logger;

    public function __construct(string $myParameter, LoggerInterface $logger)
    {

        $this->myParameter = $myParameter;
        $this->logger = $logger;
        $logger->alert('Boom');
        $logger->debug($myParameter);
        dump($myParameter);
    }

    public function create() :\Swift_Message
    {

    }

}