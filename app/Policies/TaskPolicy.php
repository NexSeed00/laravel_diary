<?php

namespace App\Policies;

use App\Task;
use App\User; 

class TaskPolicy
{
    public function view(User $user, Task $task)
    {
        return $user->id === $task->user_id;
    }
}
