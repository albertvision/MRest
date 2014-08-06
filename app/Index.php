<?php

namespace App;

class Index extends \App\MainClass {

    public function get() {
        return [
            'message' => 'Thanks for installing!'
        ];
    }

    public function post() {
        return [
            'action' => 'add new'
        ];
    }

    public function put() {
        return [
            'action' => 'replace'
        ];
    }
    
    public function delete() {
        return [
            'action' => 'delete'
        ];
    }
}
