<?php

namespace App\Controller;

use App\Model\UserManager;

/**
 * Class AvailableMoviesController
 * @package App\Controller
 */
class AvailableMoviesController extends AbstractController
{
    /**
     * visualisation de la page des films disponibles
     * @return string
     */
    public function show(): string
    {
        if (isset($_SESSION['user_id']) && $_SESSION['user']['role'] === 'admin') {
            $userData = $_SESSION['user_id'] ?? [];
            $userManager = new UserManager();
            $user = $userManager->selectOneById($_SESSION['user_id']);

            return $this->twig->render('Movie/availableMovies.html.twig', ['user' => $user, 'userData' => $userData]);
        } else {
            $user = [];
            return $this->twig->render('includes/404.html.twig',);
        }
    }
}
