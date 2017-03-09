<?php 

namespace App\Http\Controllers;
use App\Status;
use App\Http\Requests;
use App\Http\Requests\StatusRequest;
use Session;

class StatusController extends Controller {

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
    $status_list = Status::all();
    return view('status.index', compact('status_list'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('status.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(StatusRequest $request)
  {
    Status::create($request->all());
    Session::flash('flash_message', 'Data have been recorded.');
    return redirect('status');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show(Status $status)
  {
    return view('status.show', compact('status'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit(Status $status)
  {
    return view('status.edit', compact('status'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(StatusRequest $request, Status $status)
  {
    $status->update($request->all());
    Session::flash('flash_message', 'Data have been updated.');
    return redirect('status');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy(Status $status)
  {
    $status->delete();
    Session::flash('flash_message', 'Data have been deleted.');
    Session::flash('urgent', true);
    return redirect('status');
  }
  
}

?>