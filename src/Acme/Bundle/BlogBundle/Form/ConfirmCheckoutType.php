<?php
namespace Acme\Bundle\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ConfirmCheckoutType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('account', "checkbox", ['required'=>false])
                ->add('email', "email", ['required'=>false])
                ->add('check_email', "button", array('label' => 'Check'))
                ->add('address', "text", ['required'=>false])
                ->add('firstname', "text", ['required'=>false])
                ->add('lastname', "text", ['required'=>false])
                ->add('phone', "text", ['required'=>false])
                ->add('confirm', "submit", array('label' => 'Confirm'))
                
                ;
    }

    public function getName() {
        return "";
    }

}