<?php

namespace App\Controller\Admin;

use App\Entity\Music;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;

class MusicCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Music::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('name', 'Nom de la musique'),
            TextField::new('url', 'Lien'),
            TextField::new('author', 'Auteur'), 
            DateTimeField::new('createAt')->hideOnForm(),
            DateTimeField::new('updatedAt')->hideOnForm(),
        ];
    }
}
