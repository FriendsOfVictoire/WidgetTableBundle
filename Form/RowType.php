<?php

namespace Victoire\Widget\TableBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\AbstractType;


/**
 * Row form type
 */
class RowType extends AbstractType
{
    /**
     * define form fields
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('name', null, array(
                    'label' => false,
                    "required" => false
                )
            )
            ->add('values', 'collection', array(
                'type'          => 'victoire_widget_form_table_value',
                'required'      => false,
                'allow_add'     => true,
                'allow_delete'  => true,
                'by_reference'  => false,
                'prototype'     => true,
                "prototype_name" => "__ABSCISSA__"
            )
        )
        ;

    }


    /**
     * bind form to Row entity
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {

        $resolver->setDefaults(array(
            'data_class'         => 'Victoire\Widget\TableBundle\Entity\Row',
            'translation_domain' => 'victoire'
        ));
    }

    /**
     * get form name
     *
     * @return string The form name
     */
    public function getName()
    {
        return 'victoire_widget_form_table_row';
    }
}
