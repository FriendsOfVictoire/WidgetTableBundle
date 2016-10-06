<?php

namespace Victoire\Widget\TableBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Row form type.
 */
class RowType extends AbstractType
{
    /**
     * define form fields.
     *
     * @param FormBuilderInterface $builder
     *
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextareaType::class, [
                    'label'    => false,
                    'required' => false,
                    'attr' => [
                        'class' => 'vic-table-value'
                    ]
                ]
            )
            ->add('values', CollectionType::class, [
                'entry_type'     => ValueType::class,
                'required'       => false,
                'allow_add'      => true,
                'allow_delete'   => true,
                'by_reference'   => false,
                'prototype'      => true,
                'prototype_name' => '__ABSCISSA__',
            ]
        );
    }

    /**
     * bind form to Row entity.
     *
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class'         => 'Victoire\Widget\TableBundle\Entity\Row',
            'translation_domain' => 'victoire',
        ]);
    }
}
