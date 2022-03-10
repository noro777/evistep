<?php


namespace App\Interfaces;


use Spatie\DataTransferObject\DataTransferObject;

interface UserInteface
{
    /**
     * @param DataTransferObject $data
     * @return mixed
     */
    public  function store(DataTransferObject $data);

    /**
     * @param DataTransferObject $data
     * @return mixed
     */
    public  function  login(DataTransferObject $data);

    public function getUsers();
}
