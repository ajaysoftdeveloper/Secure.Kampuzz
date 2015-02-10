<?php

class ArticlesController extends \BaseController {

	/**
	 * Display a listing of articles
	 *
	 * @return Response
	 */
	public function index()
	{
		$allowed_columns = ['article_title', 'article_publish_date', 'revised'];
		$sort = in_array(Input::get('sort'), $allowed_columns) ? Input::get('sort') : 'article_title';
		$order = Input::get('order') === 'desc' ? 'desc' : 'asc';

		$articles = Article::orderBy($sort, $order)->paginate(Config::get('view.max_results_per_page'));

		return View::make('articles.index', compact('articles'));
	}

	/**
	 * Show the form for creating a new article
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('articles.create');
	}

	/**
	 * Store a newly created article in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Article::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Article::create($data);

		return Redirect::route('articles.index');
	}

	/**
	 * Display the specified article.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$article = Article::findOrFail($id);

		return View::make('articles.show', compact('article'));
	}

	/**
	 * Show the form for editing the specified article.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$article = Article::find($id);

		return View::make('articles.edit', compact('article'));
	}

	/**
	 * Update the specified article in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$article = Article::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Article::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$article->update($data);


		return Redirect::route('articles.index', ['page' => Input::get('page'),'order' => Input::get('order'),'sort' => Input::get('sort')])
			->with('success','Article edited successfully');
	}

	/**
	 * Remove the specified article from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Article::destroy($id);

		return Redirect::route('articles.index');
	}

}
