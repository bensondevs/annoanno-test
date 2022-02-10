<?php

namespace App\Contracts\Repositories;

use Illuminate\Database\Eloquent\{ Model, Builder };

interface RepositoryInterface
{
	/**
	 * Model as the subject of repository actions
	 * 
	 * This variable will contain model class instance
	 * 
	 * @var  \Illuminate\Database\Eloquent\Model
	 */
	private $model;

	/**
	 * Query builder instance container
	 * 
	 * This will store the query builder that has been resulted
	 * by the model set up the the class attribute
	 * 
	 * @var  \Illuminate\Database\Eloquent\Builder
	 */
	private $query;

	/**
	 * Repository must implement set model method
	 * 
	 * This will set the value of the model class container
	 * 
	 * @param  Illuminate\Database\Eloquent\Model  $model
	 * @return $this
	 */
	public function setModel(Model $model): self;

	/**
	 * Repository must implement set query method
	 * 
	 * This will set the value of the query instance for the
	 * repository class
	 * 
	 * @param  Illuminate\Database\Eloquent\Builder  $query
	 * @return $this
	 */
	public function setQuery(Builder $query): self;
}