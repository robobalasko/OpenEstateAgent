<?php

namespace App\Repositories;

use App\User;

class UsersRepository extends AbstractRepository
{
	/**
	 * UsersRepository.
	 * 
	 * @param User $user
	 */
	public function __construct(User $user)
	{
		parent::__construct($user);
	}
}