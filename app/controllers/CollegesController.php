<?php

class CollegesController extends \BaseController {

	/**
	 * Display a listing of colleges
	 *
	 * @return Response
	 */
	public function index()
	{

		$allowed_columns = ['college_name', 'city_name', 'college_rating', 'college_established',  's_total_brochure_download', 's_total_course_viewed','created_at' ];
		$sort = in_array(Input::get('sort'), $allowed_columns) ? Input::get('sort') : 'college_name';
		$order = Input::get('order') === 'desc' ? 'desc' : 'asc';

$colleges = College::query();


if (Input::get('college_name')<>'' )
{
    $colleges->where('college_name', 'LIKE','%' . Input::get('college_name') . '%');
}
if (Input::get('city_name')<>'' )
{
    $colleges->where('city_name', 'LIKE','%' . Input::get('city_name') . '%');
}


		$colleges = $colleges->orderBy($sort, $order)->paginate(Config::get('view.max_results_per_page'));

		return View::make('colleges.index', compact('colleges'))->withInput(Input::all());
	}

	/**
	 * Show the form for creating a new college
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('colleges.create');
	}

	/**
	 * Store a newly created college in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), College::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		College::create($data);

		return Redirect::route('colleges.index');
	}

	/**
	 * Display the specified college.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$college = College::findOrFail($id);

		return View::make('colleges.show', compact('college'));
	}

	/**
	 * Show the form for editing the specified college.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$college = College::find($id);

		return View::make('colleges.edit', compact('college'));
	}

	/**
	 * Update the specified college in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$college = College::findOrFail($id);

		$validator = Validator::make($data = Input::all(), College::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$college->update($data);

		return Redirect::route('colleges.index');
	}

	/**
	 * Remove the specified college from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		College::destroy($id);

		return Redirect::route('colleges.index');
	}

}
