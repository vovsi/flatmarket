<?php

namespace App\Components\DTO\Profile;

use App\Components\DTO\DtoContract;

class UpdatePasswordDto implements DtoContract
{
    /**
     * @var string
     */
    private string $password;

    /**
     * @var string
     */
    private string $password_confirmation;

    public function __construct(string $password, string $password_confirmation) {
        $this->password = $password;
        $this->password_confirmation = $password_confirmation;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function getPasswordConfirmation(): string
    {
        return $this->password_confirmation;
    }

    public function setPasswordConfirmation(string $password_confirmation): void
    {
        $this->password_confirmation = $password_confirmation;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'password' => $this->getPassword(),
            'password_confirmation' => $this->getPasswordConfirmation(),
        ];
    }
}
