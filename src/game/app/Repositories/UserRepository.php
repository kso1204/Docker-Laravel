<?

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    protected $user;
    protected $maxHp;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function saveHeal(array $data)
    {
       $random_num = rand(10,80);

       $this->user->hp = 10;
       $data['hp']=20;
       $this->user->where('id',1)->update($data);
        dd($data);
        /* 
        return $user-> */
    }
}

?>