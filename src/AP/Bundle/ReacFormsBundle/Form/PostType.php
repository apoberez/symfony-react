<?php


namespace AP\Bundle\ReacFormsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PostType extends AbstractType
{
    const NAME = 'post_type';

    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return self::NAME;
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', 'text', ['label' => 'Text'])
            ->add('body', 'textarea', ['label' => 'Body'])
            ->add('user', 'entity', [
                'label' => 'User',
                'class' => 'AP\Bundle\ReacFormsBundle\Entity\User'
            ])
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'AP\Bundle\ReacFormsBundle\Entity\Post',
        ]);
    }
}
