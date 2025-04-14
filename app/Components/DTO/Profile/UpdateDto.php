<?php

namespace App\Components\DTO\Profile;

use App\Components\DTO\DtoContract;

class UpdateDto implements DtoContract
{
    /**
     * @var string
     */
    private string $name;

    /**
     * @var string
     */
    private string $email;

    public function __construct(string $name, string $email) {
        $this->name = $name;
        $this->email = $email;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'name' => $this->getName(),
            'email' => $this->getEmail(),
        ];
    }
}
