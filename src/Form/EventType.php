<?php

namespace App\Form;

use App\Entity\Event;
use App\Entity\Category;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
// add this use to upload File Type
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class EventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('price')
            ->add('description')
            ->add('isPremium')
            ->add('startDate')
            ->add('endDate')
           
            // upload user event picture file
            ->add('picture' , FileType::class, [

                'label' => 'Image de votre événement (Format: jpg, png ou gif file)',
                'mapped' => true,
                'required' => false,     
            ])  

            //->add('tags')

            // select event category
            ->add('category', EntityType::class, [
                'class' => Category::class,
                'choice_label' => 'name',
                'multiple' => false,
                'expanded' => true,
                'required' => true,
            ]) 

            //->add('user')
            //->add('createdAt')
            //->add('updatedAt')
            //->add('slug')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Event::class,
        ]);
    }
}