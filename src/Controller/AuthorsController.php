<?php


namespace App\Controller;
use App\Controller\AppController;


class AuthorsController extends AppController
{

    public function initialize(): void
    {
        parent::initialize(); // TODO: Change the autogenerated stub
    }

    public function index()
    {
        $authors = $this->Authors->get(1);
        dd($authors);

    }

}
