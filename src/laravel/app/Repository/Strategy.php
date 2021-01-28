<?php

namespace App\Repository;

interface Logger {

    public function log($data);

}

class LogToFile implements Logger {

    public function log($data)
    {
        var_dump('LogToFile');
    }

}

class LogToDatabase implements Logger {

    public function log($data)
    {
        var_dump('LogToDatabase');
    }

}

class LogToXWebService implements Logger {

    public function log($data)
    {
        var_dump('LogToXWebService');
    }

}

//encapsulate and make them interchangeable
/* 
class Strategy {
    public function log($data)
    {
        $logger = new LogToFile;

        $logger->log($data);
    }
}

 */

class Strategy {
    public function log($data, Logger $logger = null)
    {
        $logger = $logger ?: new LogToFile;
        $logger->log($data);
    }
}



?>
