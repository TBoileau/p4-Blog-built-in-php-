<?php
session_start();

require_once __DIR__ . "/vendor/autoload.php";

use App\Controller\{
    PostController,
    CommentController,
    RegistrationController
};

$router = new App\Router\Router($_SERVER['PATH_INFO'] ?? "/");

// ADMIN SYSTEM
$router->get('/admin', "Admin#manageDashboard"); // display the admin panel
$router->get('/modifyPost:postId', "Admin#modifyPost")->with('postId', '[0-9]+'); // modify a post
$router->get('/deletePost', "Admin#deletePost"); // delete a post

// USER SYSTEM
// registration
$router->get('/registration', "User#userRegister");
$router->post('/registration', "User#userRegister");
// connection
$router->get('/connection', "User#userAuth");
$router->post('/connection', "User#userAuth");
// logout
$router->get('/logout', "User#logOut");
// welcome page
$router->get('/welcome', "User#displayWelcomeView"); // display the WelcomeView

// POSTS AND COMMENTS
$router->get('/', "Post#listPosts"); // display all chapters

$router->get('/chapter:postId', "Post#post")->with('postId', '[0-9]+'); // display the selected chapter
$router->post('/chapter:postId', "Post#post")->with('postId', '[0-9]+'); // Comment a chapter
//$router->get('/chapter:commentId', "Comment#reportComment")->with('commentId', '[0-9]+'); // Report a comment

// CONTACT SYSTEM
$router->get('/contact', "Contact#displayContactForm"); // display the contact form

/*
$router->get('/article/:slug-:id/:page', "Posts#show")->with('id', '[0-9]+')->with('page', '[0-9]+')->with('slug', '[a-z\-0-9]+');
*/

$router->run(); // fonction servant à vérifier si l'url tappé en paramètre correspond à un des urls