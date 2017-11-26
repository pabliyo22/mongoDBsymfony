<?php

namespace ProductBundle\Form\Type;

use Symfony\Component\Form\AbstractType;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AppBundle\Document\DailyResume;

class DailyResumeType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
      

        $builder->add('nropres', TextType::Class);
        $builder->add('nrosec', TextType::Class);
//        $builder->add('FirstCounter', PITP::Class);
//        $builder->add('LastCounter', PITP::Class);
        $builder->add('denomegm', TextType::Class);
        $builder->add('egm', TextType::Class);
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => DailyResume::class,
        ));
    }

}
