<?php


namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation;
use Symfony\Component\HttpFoundation\Response;

class StudentsController extends AbstractController
{
    public function all()
    {
        return $this->json(
            [
                [
                    "id" => 0,
                    "name" => "john doe",
                    "age" => 17
                ],
                [
                    "id" => 1,
                    "name" => "john black",
                    "age"=>18
                ]
            ],
            200,
            ['Access-Control-Allow-Origin'=>'*']
        );
    }
}