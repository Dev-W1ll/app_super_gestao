<?php
/**
 * Created by PhpStorm.
 * User: Marcos Santiago
 * Date: 21/07/2018
 * Time: 20:07
 */

namespace App\Repositories;

use App\User;
use Illuminate\Database\Eloquent\Model;

class UsuarioRepository extends Repository 
{
     /**
     * @return PegasusUser|Model
     */
    public function getModel()
    {
        return (new User());
    }

    public function getUsers()
    {
        return $this->getModel()
        ->paginate(10);
    }


}