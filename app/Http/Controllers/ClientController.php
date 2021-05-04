<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Address;
use App\Services\ClientService;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function register(Request $request){
        return view('register');
    }

    public function registerClient(Request $request){

        //pega tds os valores com $fillable/>>User
        $values = $request->all();
        $user = new User();
        $user ->fill($values);
        $user->login = $request->input('cpf', '');

        $address = new Address($values);

        $clientService = new ClientService();
        $result = $clientService->saveUser($user, $address);

        $message = $result['message'];
        $status = $result['status'];

        $request->session()->flash($status, $message);

        return redirect()->route('register');
    }
}
