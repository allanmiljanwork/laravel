<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\{Job, User};

class JobPolicy
{
   public function edit(User $user, Job $job): bool
   {

    return $job->employer->user->is($user);
   }
}
