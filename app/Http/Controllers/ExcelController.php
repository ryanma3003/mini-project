<?php

namespace App\Http\Controllers;

use App\Candidate;
use Illuminate\Http\Request;
use Excel;
use DB;

class ExcelController extends Controller
{
    public function download($type)
    {
        Excel::create('Employee_Candidate', function($excel) {
    		$excel->sheet('Sheet', function($sheet)
    		{
    			$candidates=DB::table('candidate')
                ->join('college', 'college.id', '=', 'candidate.id_college')
                ->join('degree', 'degree.id', '=', 'candidate.id_degree')
                ->join('religion', 'religion.id', '=', 'candidate.id_religion')
                ->join('status', 'status.id', '=', 'candidate.id_status')
                ->select('candidate.*', 'college.college_name as kampus', 'degree.lastest_degree as gelar', 'religion.religion_name as agama', 'status.marital_status as ms')
                ->get();
                    foreach ($candidates as $candidate) {
                        $data[] = array(
                            $candidate->name,
                            $candidate->address,
                            $candidate->birthday,
                            $candidate->jenis_kelamin,
                            $candidate->salary,
                            $candidate->thesis,
                            $candidate->kampus,
                            $candidate->gelar,
                            $candidate->agama,
                            $candidate->ms,
                            $candidate->phone_number,
                            );
                    }
                    $sheet->fromArray($data, null, 'A1', false, false);
                    $headings = array('Name', 'Address', 'Date of Birth', 'Gender', 'Expected Salary', 'Thesis Topic', 'College', 'Degree', 'Religion', 'Marital Status', 'Phone Number');
                    $sheet->prependRow(1, $headings);
    		});
    	})->download($type);
    }
}
