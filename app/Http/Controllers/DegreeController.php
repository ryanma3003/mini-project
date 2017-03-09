<?php 

namespace App\Http\Controllers;
use App\Degree;
use App\Http\Requests;
use App\Http\Requests\DegreeRequest;
use Session;

class DegreeController extends Controller {

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
    $degree_list = Degree::all();
    return view('degree.index', compact('degree_list'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('degree.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(DegreeRequest $request)
  {
    Degree::create($request->all());
    Session::flash('flash_message', 'Data have been recorded.');
    return redirect('degree');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show(Degree $degree)
  {
    return view('degree.show', compact('degree'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit(Degree $degree)
  {
    return view('degree.edit', compact('degree'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(DegreeRequest $request, Degree $degree)
  {
    $degree->update($request->all());
    Session::flash('flash.message', 'Data have been updated.');
    return redirect('degree');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy(Degree $degree)
  {
    $degree->delete();
    Session::flash('flash_message', 'Data have been deleted.');
    Session::flash('urgent', true);
    return redirect('degree');
  }
  
}

?>