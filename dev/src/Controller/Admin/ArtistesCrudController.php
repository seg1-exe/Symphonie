<?php

namespace App\Controller\Admin;

use App\Entity\Artistes;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ArtistesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Artistes::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('nom'),
        ];
    }
}
