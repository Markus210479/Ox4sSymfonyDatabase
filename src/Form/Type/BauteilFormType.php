<?php
namespace App\Form\Type;

use App\Entity\BauteilForm;
use App\Entity\ColumnNames;
use App\Entity\Units;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class BauteilFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        foreach((new ColumnNames())->attributesArr as $key => $value)
        {
            $builder->add("$key", $value['type'] ?? TextType::class, [
                'label' => $value['name'],
                'required' => false,
            ]);

            if(isset($value['choices']))
            {
                $builder->add("$key", $value['type'], [

                    'label' => $value['name'],
                    'choices' => [$value['choices']]
                ]);
            }
                
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => BauteilForm::class
        ]);
    }
}
?>