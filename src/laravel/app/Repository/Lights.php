<?

namespace App\Repository;

use App\Repository\HomeChecker;
use App\Repository\HomeStatus;

class Lights extends HomeChecker{

    public function check(HomeStatus $home)
    {
        if( ! $home->lightsOff)
        {
            throw new Exception('The lights are still on!! Abotrt abort.');
        }

        $this->next($home);
    }

}

?>