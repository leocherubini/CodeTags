<?php

namespace CodePress\CodeTag\Tests\Models;

use CodePress\CodeTag\Models\Tag;
use Codepress\CodeTag\Tests\AbstractTestCase;

class TagTest extends AbstractTestCase
{

	public function setUp()
	{
		parent::setUp();
		$this->migrate();
	}

	public function test_check_if_a_tag_can_be_persisted()
	{
		$tag = Tag::create(['name'=>'Test']);
		$this->assertEquals('Test', $tag->name);
		$tagFirst = Tag::all()->first();
		$this->assertEquals('Test', $tagFirst->name);
	}

}