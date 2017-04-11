<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class ItemType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', null, ['label' => 'name'])
            ->add('description', null, ['label' => 'description'])
            ->add('loginUrl', null, ['label' => 'login_url'])
            ->add('login', null, ['label' => 'username'])
            ->add('email', null, ['label' => 'email'])
            ->add('value', null, ['label' => 'password'])
            ->add('save', SubmitType::class, ['label' => 'add_item']);
    }
}