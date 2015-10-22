<?php

namespace Victoire\Widget\TableBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OptionConditionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('conditionOperator', 'choice', [
                    'choices' => [
                        'equalTo'       => '==',
                        'lessThan'      => '<',
                        'moreThan'      => '>',
                        'lessOrEqualTo' => '<=',
                        'moreOrEqualTo' => '=>',
                        'differentTo'   => '!=',
                        ],
                ]
            )
            ->add('conditionExpression', null, [
                    'required' => true,
                ]
            )
            ->add('valid', null, [
                    'required' => true,
                ]
            )
            ->add('notValid', null, [
                    'required' => false,
                ]
            );
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'Victoire\Widget\TableBundle\Entity\OptionCondition',
        ]);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'victoire_widget_form_table_option_condition';
    }
}
