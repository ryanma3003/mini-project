<?php 

namespace App\Http\Controllers;
use App\Religion;
use App\Http\Requests;
use App\Http\Requests\ReligionRequest;
use Session;

class ReligionController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function _construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    $religion_list = Religion::all();
    return view('religion.index', compact('religion_list'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('religion.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(ReligionRequest $request)
  {
    Religion::create($request->all());
    Session::flash('flash_message', 'Data have been recorded.');
    return redirect('religion');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show(Religion $religion)
  {
    return view('religion.show', compact('religion'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit(Religion $religion)
  {
    return view('religion.edit', compact('religion'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(ReligionRequest $request, Religion $religion)
  {
    $religion->update($request->all());
    Session::flash('flash_message', 'Data have been updated.');
    return redirect('religion');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy(Religion $religion)
  {
    $religion->delete();
    Session::flash('flash_message', 'Data have been deleeted.');
    Session::flash('urgent', true);
    return redirect('religion');
  }
  
}

?>