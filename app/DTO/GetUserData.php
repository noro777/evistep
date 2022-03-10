<?php


namespace App\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class GetUserData extends DataTransferObject
{
    public string $name;
    public string $surname;
    public string $email;
    public string $password;
}
