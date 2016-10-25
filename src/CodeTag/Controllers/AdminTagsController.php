<?php

namespace CodePress\CodeTag\Controllers;

use CodePress\CodeTag\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Contracts\Routing\ResponseFactory;
use CodePress\CodeTag\Repositories\TagRepository;

class AdminTagsController extends Controller
{

	/**
	 * @var TagRepository
	 */
	private $tagRepository;

	public function __construct(TagRepository $tagRepository)
	{
		$this->tagRepository = $tagRepository;
	}

	public function index()
	{
		$tags = $this->tagRepository->all();

		return view('codetag::index', compact('tags'));
	}

	public function create()
	{
		return view('codetag::create');
	}

	public function store(Request $request)
	{
		$this->tagRepository->create($request->all());

		return redirect()->route('admin.tags.index');
	}

	public function edit($id)
	{
		$tag = $this->tagRepository->find($id);

		return view('codetag::edit', compact('tag'));
	}

	public function update(Request $request, $id)
	{
		$this->tagRepository->update($request->all(), $id);

		return redirect()->route('admin.tags.index');
	}

	public function destroy($id)
	{
		$this->tagRepository->delete($id);

		return redirect()->route('admin.tags.index');
	}

}