<?php

return new class() extends dungeons\web\Controller {

    public function init() {
        $this->view('hello.php');
    }

    public function process($form) {
        return ['success' => true, 'name' => @$form['name']];
    }

};
