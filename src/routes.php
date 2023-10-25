<?php

// list of accessible routes of your application, add every new route here
// key : route to match
// values : 1. controller name
//          2. method name
//          3. (optional) array of query string keys to send as parameter to the method
// e.g route '/item/edit?id=1' will execute $itemController->edit(1)
return [
    'items' => ['ItemController', 'index',],
    'items/edit' => ['ItemController', 'edit', ['id']],
    'items/show' => ['ItemController', 'show', ['id']],
    'items/add' => ['ItemController', 'add',],
    'items/delete' => ['ItemController', 'delete',],
    'user/register' => ['UserController', 'add'],
    'user/login' => ['LoginController', 'login'],
    'user/logout' => ['LoginController', 'logout'],
    'movie' => ['CinemashowController', 'show', ['id']],
    '' => ['MovieController', 'index'],
    'movie/show' => ['CinemashowController', 'show', ['id']],
    'movie/availablemovies' => ['AvailableMoviesController', 'show'],
    'about' => ['AboutController', 'index'],
    'admin' => ['AdminController', 'index'],
    'admin/user' => ['userController', 'show'],
    'admin/delete' => ['AdminController', 'delete', ['id']],
    'user/profil' => ['UserController', 'edit', ['id']],
];
