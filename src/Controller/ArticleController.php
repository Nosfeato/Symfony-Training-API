<?php

    namespace App\controller;

    use Symfony\Component\HttpFoundatio\Response;
    use Symfony\Component\Routing\Annocation\Route;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
    use Sensio\Bundle\FrameworkBundle\Controller\Controller;


    class ArticleController extends Controller {

        /**
         * @Route('/')
         * @Method({'GET'})
         * 
         * 
         */

        public function index() {
            return this->render('articles/index.html.twig');
        }
    }