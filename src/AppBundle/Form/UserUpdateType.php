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
            ->add('email', EmailType::class, array('label'=>'Email'))
            ->add('role', ChoiceType::class, array('choices' =>
                array(
                    'Etudiant' => 'ROLE_STUDENT',
                    'Enseignant' => 'ROLE_TEACHER',
                    'Administrateur' => 'ROLE_ADMIN'
                ),
                'multiple' => false,
                'expanded' => true,
                'label' => 'Sélectionnez un rôle',
                'data' => 'text'))
             ->add('plainPassword', HiddenType::class, array('label'=>'Password', 'data'=>"default value"))
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