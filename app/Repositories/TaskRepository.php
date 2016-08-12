<?php 

namespace App\Repositories;

use App\User;

/**
* 
*/
class TaskRepository
{
	
	function __construct()
	{
		
	}

	/**
     * Get all of the tasks for a given user.
     *
     * @param  User  $user
     * @return Collection
     */
	public function forUser(User $user)
	{
		return $user->tasks()
					->orderBy('created_at', 'asc')
					->get();
	}
	
}