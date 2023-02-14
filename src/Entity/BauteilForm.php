<?php

namespace App\Entity;

use App\Entity\ColumnNames;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints as Assert;

class BauteilForm extends ColumnNames
{       

    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        
        foreach((new ColumnNames())->attributesArr as $key => $value)
        {
            $metadata->addPropertyConstraint("$key", new Assert\NotBlank([
                'message' => 'Das Feld darf nicht leer sein.'
            ]));
            $metadata->addPropertyConstraint("$key", new Assert\Length([            
                'min' => 8,
                'minMessage' => 'Das Passwort muss mindestes 8 Zeichen lang sein.'
            ]));
        }      

    }

}
?>
