<?php

namespace Victoire\Widget\TableBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
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
            ->add('rows', CollectionType::class, [
                    'entry_type'     => RowType::class,
                    'required'       => false,
                    'allow_add'      => true,
                    'allow_delete'   => true,
                    'by_reference'   => false,
                    'prototype'      => true,
                    'prototype_name' => '__ORDERED__',
                ]
            )
            ->add('columnFields', CollectionType::class, [
                    'entry_type'     => FieldType::class,
                    'required'       => false,
                    'allow_add'      => true,
                    'allow_delete'   => true,
                    'by_reference'   => false,
                    'prototype'      => true,
                    'prototype_name' => '__ABSCISSA__',
                ]
            )
            ->add('option', OptionValueType::class, [
                    'label'    => false,
                    'required' => false,
                ]
            )
            ->add('fullWidth', CheckboxType::class, [
                    'label'    => 'widget.table.form.fullWidth',
                    'required' => false,
                ]
            );
        parent::buildForm($builder, $options);
    }

    /**
     * bind form to WidgetTable entity.
     *
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);

        $resolver->setDefaults([
            'data_class'         => 'Victoire\Widget\TableBundle\Entity\WidgetTable',
            'widget'             => 'Table',
            'translation_domain' => 'victoire',
            'businessEntityId'   => null,
            'mode'               => 'static',
        ]);
    }
}
