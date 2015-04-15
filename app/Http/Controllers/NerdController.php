<?php 
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use resources\views\nerds;
use Illuminate\Http\Request;
use App\Models\Nerd;
use Validator, Input, Redirect, Session; 

class NerdController extends Controller {

	public function index()
	{
		// get all the nerds
		$nerds = \App\Models\Nerd::all();

		// load the view and pass the nerds
		return View('nerds.index')->with('nerds', $nerds);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
	
		return View('nerds.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
	
	$messages = [
    'required' => 'O :attribute é obrigatorio',
];

	
		$rules = array(
			'name'       => 'required',
			'email'      => 'required|email',
			'nerd_level' => 'required|numeric'
		);
		  $validator = Validator::make(Input::all(), $rules, $messages);


		// process the login
		if ($validator->fails()) {
			return Redirect::to('nerds/create')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			// store
			$nerd = new Nerd;
			$nerd->name       = Input::get('name');
			$nerd->email      = Input::get('email');
			$nerd->nerd_level = Input::get('nerd_level');
			$nerd->save();

			// redirect
			Session::flash('message', 'Nerd Cadastrado com sucesso!');
			return Redirect::to('nerds');
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// get the nerd
		$nerd = Nerd::find($id);

		// show the view and pass the nerd to it
		return View('nerds.show')->with('nerd', $nerd);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// get the nerd
		$nerd = Nerd::find($id);

		// show the edit form and pass the nerd
		return View('nerds.edit')->with('nerd', $nerd);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// validate
		// read more on validation at http://laravel.com/docs/validation
		$rules = array(
			'name'       => 'required',
			'email'      => 'required|email',
			'nerd_level' => 'required|numeric'
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('nerds/' . $id . '/edit')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			// store
			$nerd = Nerd::find($id);
			$nerd->name       = Input::get('name');
			$nerd->email      = Input::get('email');
			$nerd->nerd_level = Input::get('nerd_level');
			$nerd->save();

			// redirect
			Session::flash('message', 'Successfully updated nerd!');
			return Redirect::to('nerds');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// delete
		$nerd = Nerd::find($id);
		$nerd->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the nerd!');
		return Redirect::to('nerds');
	}

}
