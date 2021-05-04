<?php

namespace App\Services;

use App\User;
use App\Address;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ClientService{
    public function saveUser(User $user, Address $address){
        try {
            $dbUser = User::where("cpf", $user->cpf)->first();
            if($dbUser){
                return['status'=> 'err', 'message'=> 'Login already registered in the system.'];
            }
            DB::beginTransaction();
            $user->save();
            $address->user_id = $user->id;
            $address->save();
            DB::commit();

            return['status'=> 'ok', 'message'=> 'User successfully registered.'];
        }catch (\Exception $e){
            Log::error("ERROR", ['file'=>'ClientService.saveUser',
                                'message'=>$e->getMessage()]);
            DB::rollBack();
            return['status'=> 'err', 'message'=> 'It was not possible to register the user.'];
        }
    }
}
