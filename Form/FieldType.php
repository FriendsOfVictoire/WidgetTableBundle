<?php

namespace Victoire\Widget\TableBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Field form type.
 */
class FieldType extends AbstractType
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
            ->add('val', 'textarea', [
                    'label'    => false,
                    'required' => false,
                ]
            )
            ->add('option', 'victoire_widget_form_table_option_value', [
                    'label'    => false,
                    'required' => false,
                ]
            );
    }

    /**
     * bind form to Field entity.
     *
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        parent::setDefaultOptions($resolver);

        $resolver->setDefaults([
            'data_class'         => 'Victoire\Widget\TableBundle\Entity\Field',
            'translation_domain' => 'victoire',
        ]);
    }

    /**
     * get form name.
     *
     * @return string The form name
     */
    public function getName()
    {
        return 'victoire_widget_form_table_field';
    }
}
