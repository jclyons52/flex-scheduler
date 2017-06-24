<?php

namespace App\Controller;

use App\Entity\Task;
use JavierEguiluz\Bundle\EasyAdminBundle\Controller\AdminController as EasyAdminController;

class AdminController extends EasyAdminController
{
    public function createEditForm($entity, array $entityProperties)
    {
        $form = parent::createEditForm($entity, $entityProperties);

        if (!($entity instanceof Task)) {
            return $form;
        }
        $form
            ->add('subject', 'text')
            ->add('startDate', 'sonata_type_datetime_picker')
            ->add('endDate', 'sonata_type_datetime_picker')
            ->add('description', 'textarea')
            ->add('priority', 'choice',  [
                'choices' => Task::PRIORITIES
            ])
            ->add('status', 'choice', [
                'choices' => array_flip(Task::STATUSES)
            ])
            ->add('contact', 'sonata_type_model', [
                'class' => Contact::class,
                'property' => 'name',
            ])

            ->add('courier', 'sonata_type_model', array(
                'class'    => Courier::class,
                'property' => 'name',
            ))
            ->add('product', 'sonata_type_model', array(
                'class'    => Product::class,
                'property' => 'sku',
            ))
            ->add('repairer', 'sonata_type_model', array(
                'class'    => Repairer::class,
                'property' => 'name',
            ))
            ->add('warrantyProvider', 'sonata_type_model', array(
                'class'    => WarrantyProvider::class,
                'property' => 'name',
            ))
            ->add('category', 'sonata_type_model', [
                'class' => Category::class,
                'property' => 'name',
            ])
            ->add('customer', 'sonata_type_model', array(
                'class'    => Customer::class,
                'property' => 'name',
            ))
        ;
        ;
    }
}