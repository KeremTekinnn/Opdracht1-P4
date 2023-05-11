<?php

class Home extends BaseController
{
    public function index($id=null, $name=null, $haircolor=null)
    {
        $data = [
            'title' => 'Homepage van de webapp',
            'id'    => $id,
            'name'  => $name,
            'haircolor' => $haircolor
        ];

        $this->view('home/index', $data);
    }
}
