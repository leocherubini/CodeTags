<?php

namespace CodePress\CodeTag\Tests\Models;

use CodePress\CodeTag\Models\Tag;
use Codepress\CodeTag\Tests\AbstractTestCase;
use CodePress\CodeTag\Repositories\TagRepository;

class TagTest extends AbstractTestCase
{

	/**
	 * @var TagRepository
	 */
	private $tagRepository;

	public function setUp()
	{
		parent::setUp();
		$this->migrate();
		$this->tagRepository = new TagRepository();
	}

	public function test_check_if_a_tag_can_be_persisted()
	{
		$tag = $this->tagRepository->create(['name'=>'Test']);
		$this->assertEquals('Test', $tag->name);
		$tagFirst = $this->tagRepository->all()->first();
		$this->assertEquals('Test', $tagFirst->name);
	}

}