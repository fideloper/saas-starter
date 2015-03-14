<?php namespace App\Logger;

class CommandLogger {

    public function handle($command, $next)
    {
        $result = $next($command);

        if($command instanceof Loggable)
        {
            $log = new Logs;
            $log->user_id = $command->getUser()->id;
            $log->label = $command->getLabel();
            $log->data = serialize($command->getData());
        }

        return $result;
    }
}