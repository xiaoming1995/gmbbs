<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Topic;

class TopicPolicy extends Policy
{	
	//修改权限控制
    public function update(User $user, Topic $topic)
    {   
        return $user->isAuthorOf($topic);
    }

    //删除权限控制
    public function destroy(User $user, Topic $topic)
    {	
    	return $user->isAuthorOf($topic);
    }
}
