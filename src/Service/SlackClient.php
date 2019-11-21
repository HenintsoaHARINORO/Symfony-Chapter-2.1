<?php
/**
 * Created by PhpStorm.
 * User: henintsoa
 * Date: 11/21/19
 * Time: 2:14 PM
 */

namespace App\Service;
use App\Helper\LoggerTrait;
use Nexy\Slack\Client;
use Psr\Log\LoggerInterface;

class SlackClient
{
    private $slack;
    private $logger;
    use LoggerTrait;
    public function __construct(Client $slack)
    {
        $this->slack=$slack;
    }

    /**
     * @required
     */
    public function setLogger(LoggerInterface $logger)
    {
        $this->logger=$logger;
    }
    public function sendMessage(string $from, string $message)
    {
       $this->logInfo('Beaming a message',['message'=>$message]);
        $message = $this->slack->createMessage()

             ->from($from)
             ->withIcon(':ghost:')
           ->setText($message);
           $this->slack->sendMessage($message);

    }
}