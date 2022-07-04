<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Borrow;
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
        $studentBorrows = DB::select('select borrows.id, student_id, name, surname, title from borrows inner join students on students.id = student_id inner join books on books.id = book_id where students.id = ?',[$student]);
        return view('students.borrows.index', compact('studentBorrows'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Borrow  $borrow
     * @return \Illuminate\Http\Response
     */   
    public function destroy($student, $borrow)
    {
        $borrow = DB::delete('delete from borrows where id = ?',[$borrow]);
        return redirect()->action([StudentBorrowController::class, 'index'],['student'=>$student]);
    }

}
