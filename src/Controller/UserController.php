<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use FOS\RestBundle\Controller\Annotations as FOSRest;

class UserController extends AbstractController
{
    /**
     * @Route("/api", name="user")
     * @FOSRest\View()
     */
    public function index(EntityManagerInterface $em)
    {
        $users = $em->getRepository(User::class)
            ->findAll();
        return $users;
    }
}
