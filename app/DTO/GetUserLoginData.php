<?php


namespace App\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class GetUserLoginData extends DataTransferObject
{
    public string $email;
    public string $password;
}
