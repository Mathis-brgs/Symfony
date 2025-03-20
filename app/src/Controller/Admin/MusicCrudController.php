<?php

namespace App\Controller\Admin;

use App\Entity\Music;
use App\Entity\Category;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;



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
            AssociationField::new('Category', 'Catégorie'),
            DateTimeField::new('createAt')->hideOnForm(),
            DateTimeField::new('updatedAt')->hideOnForm(),
        ];
    }
}
