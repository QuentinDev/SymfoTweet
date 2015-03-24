<?php

namespace Symfotweet\TweetBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdvertController extends Controller
{
    public function indexAction()
    {
        $content = $this->get('templating')->render('SymfotweetTweetBundle:Advert:index.html.twig', array(
        'name' => 'winzou'
        )
    );
        return new Response($content);
    }
}
