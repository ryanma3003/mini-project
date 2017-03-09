<?php 

namespace App\Http\Controllers;

use App\College;
use App\Http\Requests\CollegeRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;
use Session;

class CollegeController extends Controller {

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
    $college_list = College::orderBy('college_name', 'asc')->paginate(8);
    return view('college.index', compact('college_list'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('college.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(CollegeRequest $request)
  {
    College::create($request->all());
    Session::flash('flash_message', 'Data have been recorded.');
    return redirect('college');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show(College $college)
  {
    return view('college.show', compact('college'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit(College $college)
  {
    return view('college.edit', compact('college'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(CollegeRequest $request, College $college)
  {
    $college->update($request->all());
    Session::flash('flash_message', 'Data have been updated.');
    return redirect('college');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy(College $college)
  {
    $college->delete();
    Session::flash('flash_message', 'Data have been deleted.');
    Session::flash('urgent', true);
    return redirect('college');
  }

  public function search(Request $request)
  {
    $keyword = $request->input('keyword');
    $query   = College::where('college_name', 'LIKE', '%' . $keyword . '%');
    $college_list   = $query->paginate(5);
    $pagination     = $college_list->appends($request->except('page'));
    $jumlah_college = $college_list->total();
    return view('college.index', compact('college_list', 'keyword', 'pagination', 'jumlah_college'));
  }
  
}

?>