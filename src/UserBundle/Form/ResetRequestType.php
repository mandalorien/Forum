<?php
namespace MyPerischool\SiteBundle\Form\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
class ResetRequestType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->remove('password');
    }
    public function getParent()
    {
        return RegistrationType::class;
    }
}