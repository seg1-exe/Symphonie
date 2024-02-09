<?php

namespace App\Controller\Admin;

use App\Entity\Albums;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class AlbumsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Albums::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('nom'),
            AssociationField::new('artistes'),
            AssociationField::new('categories'),
            ImageField::new('pochette', "Pochette")->setUploadDir('public/pochettes')->setBasePath('/pochettes/')->hideWhenUpdating(),
            TextField::new('spotify'),
            DateField::new('date'),
        ];
    }
}
