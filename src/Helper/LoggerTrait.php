<?php
/**
 * Created by PhpStorm.
 * User: henintsoa
 * Date: 11/21/19
 * Time: 2:30 PM
 */

namespace App\Helper;


use Psr\Log\LoggerInterface;

trait LoggerTrait
{
    /**
     * @var LoggerInterface|null
     */
    private $logger;

    /**
     * @required
     */
    public function setLogger(LoggerInterface $logger)
    {
        $this->logger=$logger;
    }
    private function logInfo(string $message,array $context =[])
    {
        if ($this->logger)
        {

        $this->logger->info($message, $context);

        }
    }
}