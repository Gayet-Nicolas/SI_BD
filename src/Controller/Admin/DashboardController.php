<?php

namespace App\Controller\Admin;

use App\Entity\BankTransaction;
use App\Entity\Competition;
use App\Entity\Disease;
use App\Entity\EquestrianCenter;
use App\Entity\Gamer;
use App\Entity\History;
use App\Entity\Horse;
use App\Entity\HorseClub;
use App\Entity\Infrastructure;
use App\Entity\Injury;
use App\Entity\Item;
use App\Entity\Parasite;
use App\Entity\Shop;
use App\Entity\Task;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        $routeBuilder = $this->container->get(AdminUrlGenerator::class);
        $url = $routeBuilder->setController(GamerCrudController::class)->generateUrl();
        return $this->redirect($url);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('MyLittlePoney');
    }

    public function configureMenuItems(): iterable
    {
        if (!$this->isGranted('ROLE_ADMIN')) {
            if ($this->isGranted('ROLE_ADMIN_USER')) {
//table user CRUD
                yield MenuItem::linkToCrud('User', '',User::class);
            }
            if ($this->isGranted('ROLE_DEVELOP')) {
// crud toutes les tables sauf user
                yield MenuItem::linkToCrud('Gamer','', Gamer::class);
                yield MenuItem::linkToCrud('Horse Club','', HorseClub::class);
                yield MenuItem::linkToCrud('Infrastructure','', Infrastructure::class);
                yield MenuItem::linkToCrud('Competition','', Competition::class);
                yield MenuItem::linkToCrud('Horse','', Horse::class);
                yield MenuItem::linkToCrud('Injury', '', Injury::class);
                yield MenuItem::linkToCrud('Disease', '', Disease::class);
                yield MenuItem::linkToCrud('Parasite', '', Parasite::class);
                yield MenuItem::linkToCrud('Item','',Item::class);
                yield MenuItem::linkToCrud('Task', '', Task::class);
                yield MenuItem::linkToCrud('Shop', '', Shop::class);
                yield MenuItem::linkToCrud('Equestrian Center','',  EquestrianCenter::class);
                yield MenuItem::linkToCrud('Bank Transaction','',  BankTransaction::class);
                yield MenuItem::linkToCrud('History', '', History::class);
            }
            if ($this->isGranted('ROLE_MODO_COMU')) {
//table modifier ou supprimer gamer
                yield MenuItem::linkToCrud('Gamer','', Gamer::class);
            }
            if ($this->isGranted('ROLE_SPEC_HORSE')) {
//table modifier/visionner cheval
                yield MenuItem::linkToCrud('Horse','', Horse::class);
            }
            if ($this->isGranted('ROLE_COMP_ADMIN')) {
//table CRUD concours
                yield MenuItem::linkToCrud('Competition','', Competition::class);
            }
            if ($this->isGranted('ROLE_HISTORY_ADMIN')) {
//table CRUD journal
                yield MenuItem::linkToCrud('History', '', History::class);
            }
            if ($this->isGranted('ROLE_CUSTOMER')) {
//READ table competition et journal
                yield MenuItem::linkToCrud('Competition','', Competition::class);
                yield MenuItem::linkToCrud('History', '', History::class);
            }
        } else {
            yield MenuItem::linkToCrud('User', '',User::class);
            yield MenuItem::linkToCrud('Gamer','', Gamer::class);
            yield MenuItem::linkToCrud('Horse Club','', HorseClub::class);
            yield MenuItem::linkToCrud('Infrastructure','', Infrastructure::class);
            yield MenuItem::linkToCrud('Competition','', Competition::class);
            yield MenuItem::linkToCrud('Horse','', Horse::class);
            yield MenuItem::linkToCrud('Injury', '', Injury::class);
            yield MenuItem::linkToCrud('Disease', '', Disease::class);
            yield MenuItem::linkToCrud('Parasite', '', Parasite::class);
            yield MenuItem::linkToCrud('Item','',Item::class);
            yield MenuItem::linkToCrud('Task', '', Task::class);
            yield MenuItem::linkToCrud('Shop', '', Shop::class);
            yield MenuItem::linkToCrud('Equestrian Center','',  EquestrianCenter::class);
            yield MenuItem::linkToCrud('Bank Transaction','',  BankTransaction::class);
            yield MenuItem::linkToCrud('History', '', History::class);
        }
    }
}