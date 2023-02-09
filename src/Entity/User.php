<?php
namespace App\Entity;

use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints as Assert;
use Webmozart\Assert\Assert as AssertAssert;

class User
{
    public $email;
    public $password;

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

    // public function getEmailHelp(): string
    // {
    //     return $this->emailHelp;
    // }

    // public function setEmailHelp(string $emailHelp): void
    // {
    //     $this->emailHelp = $emailHelp;
    // }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }
    // public $name;
    // public $firstName;
    // public $email;
    // public $passWord;
    // public $status;

    // public function __construct()
    // {
    //     $this->name = '';
    //     $this->firstName = '';
    //     $this->email = '';
    //     $this->passWord = '';
    //     $this->status = '';
    // }

    // public array $userAttr = [
    //     'name' => 'Name',
    //     'firstName' => 'Vorname',
    //     'email' => 'Email',
    //     'passWord' => 'Passwort',
    //     'status' => 'Status'
    // ];

    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        // $metadata->addPropertyConstraint('email', new NotBlank());
        // $metadata->addPropertyConstraint('password', new NotBlank());
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