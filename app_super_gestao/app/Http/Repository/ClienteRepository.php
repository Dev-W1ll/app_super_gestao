<?php
/**
 * Created by PhpStorm.
 * User: Marcos Santiago
 * Date: 21/07/2018
 * Time: 20:07
 */

namespace App\Repositories;

use App\Cliente;
use Illuminate\Database\Eloquent\Model;

class ClienteRepository extends Repository 
{
     /**
     * @return PegasusUser|Model
     */
    public function getModel()
    {
        return (new Cliente());
    }


}