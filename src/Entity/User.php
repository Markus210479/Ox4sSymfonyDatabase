<?php
namespace App\Entity;

use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints as Assert;
use Webmozart\Assert\Assert as AssertAssert;

class User
{
    private $email;
    private $password;

    public function __construct()
    {
        $this->email = '';
        $this->password = '';
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }


    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('email', new Assert\NotBlank([
            'message' => 'Das Feld darf nicht leer sein.'
        ]));
        $metadata->addPropertyConstraint('email', new Assert\Email([
            'message' => 'Die email "{{ value }}" ist keine gültige Adresse.',
        ]));
        $metadata->addPropertyConstraint('password', new Assert\NotBlank([
            'message' => 'Das Feld darf nicht leer sein.'
        ]));
        $metadata->addPropertyConstraint('password', new Assert\Length([            
            'min' => 8,
            'minMessage' => 'Das Passwort muss mindestes 8 Zeichen lang sein.'
        ]));

    }
}
?>