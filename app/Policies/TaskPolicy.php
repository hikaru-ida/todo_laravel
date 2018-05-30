<?php

namespace App\Policies;

use App\User;
use App\Task;
use Illuminate\Http\Request;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class TaskPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function destroy(User $user,  Task $task)
    {
        //return $user->id === $task->user_id;
        //return Auth::id() === $task->user_id;
        logger($user->id);
        logger($task->user_id);
        logger($user->id == $task->user_id);
        return true;
    }
}
