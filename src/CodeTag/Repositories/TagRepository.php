<?php

namespace CodePress\CodeTag\Repositories;

use CodePress\CodeDatabase\AbstractRepository;
use CodePress\CodeTag\Models\Tag;

class TagRepository extends AbstractRepository
{

	public function model()
	{
		return Tag::class;
	}

}