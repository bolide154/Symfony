<?php
namespace Acme\Bundle\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RemoveOrderType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('order_id', "hidden")
                ->add('remove', "submit", array('label' => 'Remove'))
                ;
    }

    public function getName() {
        return "";
    }

}