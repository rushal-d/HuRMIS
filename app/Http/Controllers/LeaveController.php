<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PersonalInformation;
use App\Leave;

class LeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $personal = PersonalInformation::where('id', $request->id)->first();
        return view('leave.create', ['personal' => $personal]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $personal_id = $request->personal_id;
        $leaves = $request->leave;
        foreach($leaves as $leave)
        {
            $leav = new Leave();
            $leav->personal_id = $personal_id;
            $leav->type_of_leave = $leave['type_of_leave'];
            $leav->from_date = $leave['from_date'];
            $leav->to_date = $leave['to_date'];
            $leav->from_date_en = $leave['from_date_en'];
            $leav->to_date_en = $leave['to_date_en'];
            $leav->save();
        }
            return redirect()->route('leave.show', ['personal_id' => $personal_id])->with('success', 'Successfully Inserted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $info = PersonalInformation::find($id);
        return view('leave.show', ['info' => $info]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $leave = Leave::find($id);
        return view('leave.edit', ['leave' => $leave]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $leave = Leave::find($id);
        $leave->type_of_leave = $request->input('type_of_leave');
        $leave->from_date = $request->input('from_date');
        $leave->to_date = $request->input('to_date');
        $leave->save();

        return redirect()->route('leave.show', ['id' => $leave->personal_id])->with('success', 'Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $leave = Leave::find($id);
        $leave->delete();

        return redirect()->route('leave.show', ['id' => $leave->personal_id])->with('success', 'Successfully Deleted');
    }
}
