<?php

namespace Victoire\Widget\TableBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OptionConditionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('conditionOperator', ChoiceType::class, [
                    'choices' => [
                        '==' => 'equalTo',
                        '<'  => 'lessThan',
                        '>'  => 'moreThan',
                        '<=' => 'lessOrEqualTo',
                        '=>' => 'moreOrEqualTo',
                        '!=' => 'differentTo',
                        ],
                    'choices_as_values' => true,
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
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'Victoire\Widget\TableBundle\Entity\OptionCondition',
        ]);
    }
}
