<?php


namespace App\Service;


use App\Interfaces\UserInteface;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\DataTransferObject\DataTransferObject;

class UserService implements UserInteface
{
    public function store(DataTransferObject $data)
    {
        $user = User::create([
            'name'=>$data->name,
            'surname'=>$data->surname,
            'email'=>$data->email,
            'password'=>Hash::make($data->password)
        ]);
        auth()->login($user);

        return $user;
    }


    public function login(DataTransferObject $data)
    {
        $result = User::where('email',$data->email)
            ->first();

        if($result && Hash::check($data->password,$result->password)){
            auth()->login($result);
            return $result;
        }
        else{
            return 0;
        }
    }

    public function getUsers(){
        return User::all();
    }
}
