<?php

namespace App\Controller;

use App\Model\UserManager;

class AboutController extends AbstractController
{
    /**
     * visualisation de la page à propos
     * @return string
     */
    public function index(): string
    {
        $userData = $_SESSION['user_id'] ?? [];
        if (isset($_SESSION['user_id'])) {
            $userManager = new UserManager();
            $user = $userManager->selectOneById($_SESSION['user_id']);
        } else {
            $user = [];
        }

        return $this->twig->render('about.html.twig', ['user' => $user, 'userData' => $userData]);
    }
}
