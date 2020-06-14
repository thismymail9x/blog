<?php


namespace App\Http\Repositories;


use App\User;
use Illuminate\Support\Facades\DB;

class UserRepository
{
protected $user;
public function __construct(User $user)
{
    $this->user=$user;
}
    public function getAll()
    {
        return $this->user->all();

    }

    public function save($user)
    {
        $user->save();
    }

    public function find($id)
    {
        return $this->user->findOrFail($id);
    }

    public function delete($user)
    {
        DB::table('blogs')->where('user_id', '=', $user->id)->delete();
        $user->delete();
    }
}