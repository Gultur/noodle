<?php

namespace AppBundle\Form;


use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserUpdateType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', TextType::class, array('label'=>'Username'))
            //->add('password', PasswordType::class, array('label'=>'Password'))
            ->add('email', EmailType::class, array('label'=>'Email'))
            ->add('role', ChoiceType::class, array('choices' =>
                array(
                    'Etudiant' => 'ROLE_STUDENT',
                    'Enseignant' => 'ROLE_TEACHER'),
                'multiple' => false,
                'expanded' => true,
                'label' => 'Sélectionnez un rôle',
                'data' => 'text'))

             /*->add('plainPassword', RepeatedType::class, array (
                'type' => PasswordType::class,
                'first_options' => array('label' => 'Mot de passe'),
                'second_options' => array('label' => 'Validez mot de passe'),
                'required' => false,))*/
             ->add('plainPassword', HiddenType::class, array('label'=>'Password', 'data'=>"default value because symfony want it so bad"))
        ;
    }


    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\User'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_user';
    }

}