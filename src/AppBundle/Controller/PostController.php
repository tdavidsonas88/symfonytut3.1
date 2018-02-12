<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PostController extends Controller
{
    /**
     * @Route("/post", name="view_post_route")
     */
    public function viewPostAction() {
        $posts = $this->getDoctrine()->getRepository('AppBundle:Post')->findAll();
        // echo '<pre>';
        // print_r($post);
        // echo '<pre>';
        // exit();
        return $this->render("pages/index.html.twig", ['posts' => $posts]);
    }
    /**
     * @Route("/post/create", name="create_post_route")
     */
    public function createPostAction() {
        return $this->render("pages/create.html.twig");
    }
    /**
     * @Route("/post/update/{id}", name="update_post_route")
     */
    public function updatePostAction($id, Request $request) {
        return $this->render("pages/update.html.twig");
    }
    /**
     * @Route("/post/show/{id}", name="show_post_route")
     */
    public function showPostAction($id, Request $request) {
        return $this->render("pages/view.html.twig");
    }
    /**
     * @Route("/post/delete/{id}", name="delete_post_route")
     */
    public function deletePostAction($id, Request $request) {
        return $this->render("pages/delete.html.twig");
    }


}
