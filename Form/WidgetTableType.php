<?php

namespace Victoire\Widget\TableBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Victoire\Bundle\CoreBundle\Form\WidgetType;

/**
 * WidgetTable form type.
 */
class WidgetTableType extends WidgetType
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
            ->add('rows', 'collection', [
                    'type'           => 'victoire_widget_form_table_row',
                    'required'       => false,
                    'allow_add'      => true,
                    'allow_delete'   => true,
                    'by_reference'   => false,
                    'prototype'      => true,
                    'prototype_name' => '__ORDERED__',
                ]
            )
            ->add('columnFields', 'collection', [
                    'type'           => 'victoire_widget_form_table_field',
                    'required'       => false,
                    'allow_add'      => true,
                    'allow_delete'   => true,
                    'by_reference'   => false,
                    'prototype'      => true,
                    'prototype_name' => '__ABSCISSA__',
                ]
            )
            ->add('option', 'victoire_widget_form_table_option_value', [
                    'label'    => false,
                    'required' => false,
                ]
            )
            ->add('fullWidth', 'checkbox', [
                    'label'    => 'widget.table.form.fullWidth',
                    'required' => false,
                ]
            );
        parent::buildForm($builder, $options);
    }

    /**
     * bind form to WidgetTable entity.
     *
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        parent::setDefaultOptions($resolver);

        $resolver->setDefaults([
            'data_class'         => 'Victoire\Widget\TableBundle\Entity\WidgetTable',
            'widget'             => 'Table',
            'translation_domain' => 'victoire',
            'namespace'          => null,
            'businessEntityId'   => null,
            'mode'               => 'static',
        ]);
    }

    /**
     * get form name.
     *
     * @return string The form name
     */
    public function getName()
    {
        return 'victoire_widget_form_table';
    }
}
