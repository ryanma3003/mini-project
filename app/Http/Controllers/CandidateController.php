<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Candidate;
use App\College;
use App\Degree;
use App\Religion;
use App\Status;
use App\Http\Requests\CandidateRequest;
use Illuminate\Foundation\Http\FormRequest;
use Session;

class CandidateController extends Controller {

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
    $candidate_list = Candidate::orderBy('name', 'asc')->paginate(5);
    $jumlah_candidate = Candidate::count();
    return view('candidate.index', compact('candidate_list', 'jumlah_candidate'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('candidate.create', compact('college_list'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(CandidateRequest $request)
  {
    $input = $request->all();

    $candidate = Candidate::create($input);

    Session::flash('flash_message', 'Data have been recorded.');

    return redirect('candidate');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show(Candidate $candidate)
  {
    return view('candidate.show', compact('candidate'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit(Candidate $candidate)
  {
    return view('candidate.edit', compact('candidate'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Candidate $candidate, CandidateRequest $request)
  {
    $input = $request->all();

    $candidate->update($request->all());

    Session::flash('flash_message', 'Data have been updated.');

    return redirect('candidate');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy(Candidate $candidate)
  {
    $candidate->delete();
    Session::flash('flash_message', 'Data have been deleted.');
    Session::flash('urgent', true);
    return redirect('candidate');
  }

  public function search(Request $request)
  {
    $keyword = $request->input('keyword');
    $query   = Candidate::where('name', 'LIKE', '%' . $keyword . '%');
    $candidate_list   = $query->paginate(5);
    $pagination       = $candidate_list->appends($request->except('page'));
    $jumlah_candidate = $candidate_list->total();
    return view('candidate.index', compact('candidate_list', 'keyword', 'pagination', 'jumlah_candidate'));
  }
  
}

?>