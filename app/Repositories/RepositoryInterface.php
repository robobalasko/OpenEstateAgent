<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

interface RepositoryInterface
{
	/**
	 * Fetches all entities from the storage.
	 * 
	 * @param array $columns
	 * 
	 * @return Collection
	 */
	public function getAll(array $columns = ['*']);
	
	/**
	 * Fetches the specified entity from the storage.
	 * 
	 * @param int   $id
	 * @param array $columns
	 * 
	 * @return Model
	 * @throws ModelNotFoundException
	 */
	public function getById($id, array $columns = ['*']);
	
	/**
	 * Deletes the specified entity from the storage.
	 * 
	 * @param int $id
	 * 
	 * @return Model
	 * @throws ModelNotFoundException
	 */
	public function deleteById($id);
}