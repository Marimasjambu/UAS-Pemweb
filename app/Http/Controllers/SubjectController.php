<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateSubjectRequest;
use App\Http\Requests\StoreSubjectRequest;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $subjects = DB::table('subjects')
        ->select('id','title', 'lecturer_id', 'lecturer_name', 'semester', 'academic_year', 'sks', 'code', 'description', DB::raw('DATE_FORMAT(created_at, "%d %M %Y")
         as created_at'))
        ->orderBy('id', 'asc')
        ->paginate(15);
    return view('pages.subjects.subject', compact('subjects'));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function create(){
        return view('pages.subjects.create');
    }

    public function store(StoreSubjectRequest $request)
    {
        Subject::create([
            'title'=> $request['title'],
            'lecturer_id'=> $request['lecturer_id'],
            'lecturer_name'=> $request['lecturer_name'],
            'semester'=> $request['semester'],
            'sks'=> $request['sks'],
            'academic_year'=> ($request['academic_year']),            
            'code'=> $request['code'],
            'description'=> $request['description']
        ]);
        
        return redirect(route('subject.index'))->with('success', 'New Subject Successfully');
        
    }
    /*public function create()
    {
        return view('pages.subjects.create');
    }

    public function store(StoreSubjectRequest $request)
    {
        Subject::create([
            'title'=> $request['title'],
            'semester'=> $request['semester'],
            'lecturer_id'=> $request['lecturer_id'],
            'lecturer_name'=> $request['lecturer_name'],
            'academic_year'=> ($request['academic_year']),
            'sks'=> $request['sks'],
            'code'=> $request['code'],
            'description'=> $request['description']
        ]);        
        return redirect(route('subject.index'))->with('success', 'New Subject Successfully');
        
    }*/

    public function edit(Subject $subject)
    {
        return view('pages.subjects.edit')->with('subject', $subject);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubjectRequest $request, Subject $subject)
    {
        $validate = $request->validated();
        $subject->update($validate);
        return redirect()->route('subject.index')->with('success', 'Edit User Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        $subject->delete();
        return redirect()->route('subject.index')->with('success', 'Delete User Successfully');
    }
}
