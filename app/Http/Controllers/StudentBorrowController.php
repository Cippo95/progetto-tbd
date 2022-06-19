<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Borrows;
use Illuminate\Support\Facades\DB;

class StudentBorrowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($student)
    {
        $studentBorrows = DB::select('select * from borrows inner join students on students.id = student_id inner join books on books.id = book_id where students.id = ?',[$student]);
        return view('students.borrows.index', compact('studentBorrows'));
    }

}
