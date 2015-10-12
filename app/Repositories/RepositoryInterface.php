<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

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
	 */
	public function getById($id, array $columns = ['*']);
	
	/**
	 * Deletes the specified entity from the storage.
	 * 
	 * @param int $id
	 * 
	 * @return Model
	 */
	public function deleteById($id);
}