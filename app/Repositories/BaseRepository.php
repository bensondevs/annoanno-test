<?php

namespace App\Repositories;

use App\Contracts\Repositories\RepositoryInterface;
use Illuminate\Database\Eloquent\{ Model, Builder };

class BaseRepository implements RepositoryInterface
{
	/**
	 * Set model of the repository class
	 * 
	 * @param  Illuminate\Database\Eloquent\Model  $model
	 * @return $this
	 */
	public function setModel(Model $model): self
	{
		//
	}

	/**
	 * Set query of the repository class
	 * 
	 * @param  Illuminate\Database\Eloquent\Builder  $model
	 * @return $this
	 */
	public function setQuery(Builder $query): self
	{
		//
	}
}