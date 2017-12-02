<?php

namespace Serefercelik\Kuveyt\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Description of Kuveyt Facade 
 *
 * @author Şeref Erçelik
 */
class Kuveyt extends Facade {

    protected static function getFacadeAccessor()
    {
        return 'kuveyt';
    }
}
