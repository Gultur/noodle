<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use AppBundle\Repository\AnswerRepository;
use AppBundle\Form\AnswerType;
use AppBundle\Entity\Question;


class QuestionType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array(
                'label' => 'Nom de la question'
            ))
            ->add('type', ChoiceType::class, array('choices' =>
                    array(
                        'Texte' => 'text',
                        'Vrai ou Faux' => 'trueOrFalse',
                        'Réponses multiples, un seul choix possible' => 'multipleChoicesRadio',
                        'Réponses multiples, plusieurs choix possibles' => 'multipleChoicesCheckBox'
                    ),
                    'multiple' => false,
                    'expanded' => true,
                    'label' => 'Sélectionner un type',
                    'data' => 'text'
                )
            )
            ->add('question', TextType::class, array(
                'label' => 'Enoncé'
            ))
            ->add('time', IntegerType::class, array(
                'label' => 'Durée (en seconde)'
            ))

            ->add('answers', CollectionType::class, array(
                'entry_type'   => AnswerType::class,
                'allow_add'    => true,
                'allow_delete' => true,
                'label' => 'Indiquer une ou des réponses'
                )
            );
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            //'data_class' => 'AppBundle\Entity\Question'
            'data_class' => Question::class
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_question';
    }


}
