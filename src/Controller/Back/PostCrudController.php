<?php

namespace App\Controller\Back;

use App\Entity\Post;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PostCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Post::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
         return [
            TextField::new('content')->setLabel('Commentaire'),
            AssociationField::new('author')->setLabel('Auteur'),
            AssociationField::new('event')->setLabel('Event'),
            DateField::new('created_at')->hideOnForm(),
        ]; 
    }
    
}
