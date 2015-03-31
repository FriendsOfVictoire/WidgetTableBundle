<?php

namespace Victoire\Widget\TableBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OptionConditionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('conditionOperator', "choice", array(
                    "choices" => array(
                        "equalTo" => "==",
                        "lessThan" => "<",
                        "moreThan" => ">",
                        "lessOrEqualTo" => "<=",
                        "moreOrEqualTo" => "=>",
                        "differentTo" => "!="
                        )
                )
            )
            ->add('conditionExpression', null, array(
                    "required" => true
                )
            )
            ->add('valid', null, array(
                    "required" => true
                )
            )
            ->add('notValid', null, array(
                    "required" => false
                )
            )
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Victoire\Widget\TableBundle\Entity\OptionCondition'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'victoire_widget_form_table_option_condition';
    }
}
