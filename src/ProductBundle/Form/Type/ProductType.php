<?php

namespace ProductBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AppBundle\Document\HandlerShippingEGMLog;

class ProductType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('accountingdate', TextType::class);
        $builder->add('sendDate', TextType::class);
        $builder->add('EGMShipping', CollectionType::class, array(
            // each entry in the array will be an "email" field
            'entry_type' => DailyResumeType::class,
            // these options are passed to each "email" type
            'entry_options' => array(
                'attr' => array('class' => 'email-box')
            ),
        ));
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => HandlerShippingEGMLog::class,
        ));
    }

}
