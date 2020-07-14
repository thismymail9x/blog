<?php


namespace App\Http\Services;


use App\Http\Repositories\UserRepository;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserService
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getAll()
    {
        return $this->userRepository->getAll();
    }

    public function create($request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->username = $request->email;
        $user->password = Hash::make($request->password);
        if ($request->hasFile('image')) {
            $image = $request->image;
            $path = $image->store('images', 'public');
            $user->image = $path;
        } else {
            $user->image = 'public/images/default.jpn';
        }
        $user->role = $request->role;
        $this->userRepository->save($user);
        toastr()->success('Bravo Success!');
    }

    public function find($id)
    {
        return $this->userRepository->find($id);
    }

    public function edit($request, $user)
    {
        $user->name = $request->name;
        $user->username = $request->email;
        if ($request->hasFile('image')) {
            $image = $request->image;
            $path = $image->store('images', 'public');
            $user->image = $path;
        } else {
            $user->image = 'public/images/default.jpn';
        }
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $this->userRepository->save($user);
        toastr()->info('Success Edit');
    }

    public function delete($user)
    {
        $this->userRepository->delete($user);
        toastr()->success('Success Delete');
    }

}