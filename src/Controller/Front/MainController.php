<?php

namespace App\Controller\Front;

use DateTime;
use App\Entity\User;
use App\Entity\Event;
use Symfony\Component\HttpFoundation\{ Request, Response};
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\{ CategoryRepository, EventRepository };
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main_home")
     */
    public function showHomePage(CategoryRepository $categoryRepository, EventRepository $eventRepository, Request $request): Response
    {
        $categories = $categoryRepository->findAll();

        // TODO test intégration géolocalisation
        // récupération de la localité dans les cookies
        $locality = $request->cookies->get('locality');
        dump($locality);
        $eventsByDept = $eventRepository->findByLocality($locality);
        dump($eventsByDept);
        // TODO fin  de test
        
        // On récupère tous les évènements grâce à requête FindALL custom EventRepository
        $events = $eventRepository->findAll();
 
        // Je récupère la date du jour
        $currentDate = new DateTime('now');
        $currentDate = $currentDate->format('Y-m-d');

        // On stocke les évènements dans 2 tableaux
        $currentEvents = [];
        $upcomingEvents = [];

        // Formattage des dates pour comparaison de chaque event et stockage des events dans chaque tableau
        foreach ($events as $event) {  
            $date = $event->getEndDate() ? $event->getEndDate() : $event->getStartDate();   
            $date = $date->format('Y-m-d');

            $dateEvent = $event->getStartDate();
            $dateEvent = $dateEvent->format('Y-m-d');

            if ($date >= $currentDate && $dateEvent <= $currentDate )
            {   
                
                $currentEvents[] = $event;
    
            } elseif ($dateEvent > $currentDate) {
                
                $upcomingEvents[] = $event;
           
            } 
        }

        $premiumEvents = $eventRepository->findBy(['isPremium'=> 'true'],['createdAt' => 'DESC'], 5);
        //dump($premiumEvents);
         //dd($currentEvents, $upcomingEvents);

        return $this->render('front/main/home.html.twig', compact('currentEvents', 'upcomingEvents', 'categories', 'premiumEvents'));
    }
}