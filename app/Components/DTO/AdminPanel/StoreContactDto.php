<?php

namespace App\Components\DTO\AdminPanel;

use App\Components\DTO\DtoContract;

class StoreContactDto implements DtoContract
{
    /**
     * @var string
     */
    private string $phone;

    /**
     * @var string
     */
    private string $email;

    /**
     * @var string
     */
    private string $address;

    /**
     * @var string
     */
    private string $time_work;

    public function __construct(string $phone, string $email, string $address, string $time_work)
    {
        $this->phone = $phone;
        $this->email = $email;
        $this->address = $address;
        $this->time_work = $time_work;
    }

    public function toArray(): array
    {
        return [
            'phone' => $this->phone,
            'email' => $this->email,
            'address' => $this->address,
            'time_work' => $this->time_work,
        ];
    }

    public function getTimeWork(): string
    {
        return $this->time_work;
    }

    public function setTimeWork(string $time_work): void
    {
        $this->time_work = $time_work;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }
}
