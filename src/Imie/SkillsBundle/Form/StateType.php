<?php

namespace Imie\SkillsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class StateType extends AbstractType {
  /**
  * @param FormBuilderInterface $builder
  * @param array $options
  */
  public function buildForm(FormBuilderInterface $builder, array $options) {
    $builder
    ->add('statut', null, array(
      'label' => 'Nom de l\'étape :'
    ))
    ->add('Valider', 'submit', array(
      'attr' => array('class' => 'btn btn-primary'),
    ))
    ;
  }

  /**
  * @param OptionsResolverInterface $resolver
  */
  public function setDefaultOptions(OptionsResolverInterface $resolver) {
    $resolver->setDefaults(array(
      'data_class' => 'Imie\SkillsBundle\Entity\State'
    ));
  }

  /**
  * @return string
  */
  public function getName() {
    return 'imie_skillsbundle_state';
  }
}
