<?php

namespace Victoire\Widget\TableBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

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
            ->add('val', TextareaType::class, [
                    'label'    => false,
                    'required' => false,
                    'attr'     => [
                        'class' => 'vic-table-value',
                    ],
                ]
            )
            ->add('option', OptionValueType::class, [
                    'label'    => false,
                    'required' => false,
                ]
            );
    }

    /**
     * bind form to Field entity.
     *
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);

        $resolver->setDefaults([
            'data_class'         => 'Victoire\Widget\TableBundle\Entity\Field',
            'translation_domain' => 'victoire',
        ]);
    }
}
