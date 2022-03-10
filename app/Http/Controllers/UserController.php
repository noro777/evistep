<?php

namespace App\Http\Controllers;

use App\DTO\GetUserData;
use App\DTO\GetUserLoginData;
use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserRequest;
use App\Http\Resources\UserLoginResource;
use App\Http\Resources\UserResource;
use App\Interfaces\UserInteface;
use Illuminate\Support\Facades\Auth;
use function Symfony\Component\Routing\Loader\Configurator\collection;

class UserController extends Controller
{
    /**
     * @param UserRequest $request
     * @param UserInteface $inteface
     * @return UserResource
     * @throws \Spatie\DataTransferObject\Exceptions\UnknownProperties
     */
    public  function store(UserRequest $request,UserInteface $inteface){

        $data = new GetUserData($request->validated());

        $user = $inteface->store($data);

        return new UserResource($user);
    }

    /**
     * @param UserLoginRequest $request
     * @param UserInteface $inteface
     * @return UserLoginResource|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     * @throws \Spatie\DataTransferObject\Exceptions\UnknownProperties
     */
    public  function login(UserLoginRequest $request,UserInteface $inteface){
        $data = new GetUserLoginData($request->validated());

        $user = $inteface->login($data);

        return $user ? new UserLoginResource($user) : \response('The email or password is incorrect, please try again',404);
    }

    /**
     * @param UserInteface $inteface
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function getUsers(UserInteface $inteface){

        $users = $inteface->getUsers();

        return  UserResource::collection($users);
    }
}
