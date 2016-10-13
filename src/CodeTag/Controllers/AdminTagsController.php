<?php

namespace CodePress\CodeTag\Controllers;

use CodePress\CodeTag\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Contracts\Routing\ResponseFactory;

class AdminTagsController extends Controller
{

	/**
	 * @var Tag
	 */
	private $tagModel;

	public function __construct(Tag $tagModel)
	{
		$this->tagModel = $tagModel;
	}

	public function index()
	{
		$tags = $this->tagModel->all();

		return view('codetag::index', compact('tags'));
	}

	public function create()
	{
		return view('codetag::create');
	}

	public function store(Request $request)
	{
		$this->tagModel->create($request->all());

		return redirect()->route('admin.tags.index');
	}

	public function edit($id)
	{
		$tag = $this->tagModel->find($id);

		return view('codetag::edit', compact('tag'));
	}

	public function update(Request $request, $id)
	{
		$this->tagModel->find($id)->update($request->all());

		return redirect()->route('admin.tags.index');
	}

	public function destroy($id)
	{
		$this->tagModel->find($id)->delete();

		return redirect()->route('admin.tags.index');
	}

}