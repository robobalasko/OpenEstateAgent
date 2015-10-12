<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class AbstractRepository implements RepositoryInterface
{
	/**
	 * The default model for this repository.
	 * 
	 * @var Model
	 */
	protected $model;
	
	/**
	 * AbstractRepository.
	 * 
	 * @param Model $model
	 */
	public function __construct(Model $model)
	{
		$this->model = $model;
	}
	
	/**
	 * {@inheritDoc}
	 * @see \App\Repositories\RepositoryInterface::getAll()
	 */
	public function getAll(array $columns = ['*'])
	{
		return $this->model->all($columns);
	}
	
	/**
	 * {@inheritDoc}
	 * @see \App\Repositories\RepositoryInterface::getById()
	 */
	public function getById($id, array $columns = ['*'])
	{
		return $this->model->findOrFail($id, $columns);
	}
	
	/**
	 * {@inheritDoc}
	 * @see \App\Repositories\RepositoryInterface::deleteById()
	 */
	public function deleteById($id)
	{
		$entity = $this->getById($id);
		
		$entity->delete();
		
		return $entity;
	}
}