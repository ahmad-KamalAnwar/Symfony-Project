<?php

namespace Apna\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LuckyController extends Controller
{
    /**
     * @Route("/lucky/number")
     */
    public function numberAction()
    {
        $number = random_int(0, 100);

        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);
    }

    /**
     * Matches /exact exactly
     *
     * @Route("/exact")
     */

    public function exactMatchAction()
    {
        // redirects to a route with parameters
        return $this->redirectToRoute('match_slug', ['slug' => 'my-page']);
    }

    /**
     * Matches /exact/*
     * but not /exact/page/extra-part
     *
     * @Route("/exact/{page}", name="match_page", requirements={"page"="\d+"})
     */
    public function pageChangeAction($page)
    {
        return new Response(
            '<html><body>Value Page: '.$page.'</body></html>'
        );
    }


    /**
     * Matches /exact/*
     * but not /exact/slug/extra-part
     *
     * @Route("/exact/{slug}", name="match_slug")
     */
    public function slugChangeAction($slug)
    {
        return new Response(
            '<html><body>Value Slug: '.$slug.'</body></html>'
        );
    }

    /**
     * @Route("/trans", name="translation")
     */
//    public function translateAction(){
////        // text will *always* print out in English
////        dump('Hello World');
////        die();
////
////// text can be translated into the end-user's language or
////// default to English
////        dump($translator->trans('Hello World'));
////        die();
//
////        $translated = $this->get('translator')->trans('Symfony is great');
//
//        $translated = $this->get('translator')->trans('symfony.great');
//
////        $translated = $this->get('translator')->trans('Hello '.$name.'!');
//
////        $translated = $this->get('translator')->trans('Hello %name%');
//
////        // the %count% placeholder is assigned to the second argument...
////        $this->get('translator')->transChoice(
////            'There is one apple|There are %count% apples',
////            10
////        );
////
////// ...but you can define more placeholders if needed
////        $this->get('translator')->transChoice(
////            'Hurry up %name%! There is one apple left.|There are %count% apples left.',
////            10,
////            // no need to include %count% here; Symfony does that for you
////            ['%name%' => $user->getName()]
////        );
//
////        $translator->trans(
////            'Symfony is great',
////            [],
////            'messages',
////            'fr_FR'
////        );
////
////        $translator->transChoice(
////            '{0} There are no apples|{1} There is one apple|]1,Inf[ There are %count% apples',
////            10,
////            [],
////            'messages',
////            'fr_FR'
////        );
//
//
//    }

}

//<?= $view['translator']->trans('Symfony is great') ?>
<!---->
<?//= $view['translator']->transChoice(
//    '{0} There are no apples|{1} There is one apple|]1,Inf[ There are %count% apples',
//    10,
//    ['%count%' => 10]
//) ?>

