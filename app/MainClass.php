<?php

namespace App;

class MainClass {

    private static $_db = null;

    /**
     * 
     * @return \Maleeby\MRest\Libs\DB
     */
    protected static function db() {
        if (self::$_db === null) {
            self::$_db = new \MRest\Libs\DB('main');
        }
        return self::$_db;
    }

}
