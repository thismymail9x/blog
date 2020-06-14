<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Http\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    protected $userSevice;

    public function __construct(UserService $userService)
    {
        $this->userSevice = $userService;
    }

    public function index()
    {
        $users = $this->userSevice->getAll();
        return view('users.list', compact('users'));
    }

    public function showFormCreate()
    {
        return view('users.form-create');
    }

    public function create(UserRequest $request)
    {
        $this->userSevice->create($request);
        return redirect()->route('user.index');
    }

    public function showFormEdit($id)
    {

        $user = $this->userSevice->find($id);
        return view('users.form-edit', compact('user'));
    }

    public function edit(UserRequest $request, $id)
    {
        $user = $this->userSevice->find($id);
        $this->userSevice->edit($request, $user);
        return redirect()->route('user.index');
    }

    public function delete($id)
    {
        $user = $this->userSevice->find($id);
        $this->userSevice->delete($user);
        return back();
    }

    public function login(Request $request)
    {
        $username = $request->email;
        $password = $request->password;
        $user = [
            'username' => $username,
            'password' => $password
        ];
        if (Auth::attempt($user)) {
          return redirect()->route('blog.index');
        }
        else{
            return redirect()->route('case');
        }
    }
}
