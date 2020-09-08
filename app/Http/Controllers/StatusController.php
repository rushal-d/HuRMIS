<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use App\PersonalInformation;
use App\Status;


class StatusController extends Controller
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
        $status  = Config::get('constants.status');
        $personal = PersonalInformation::where('id', $request->id)->first();

        return view('status.create', ['status' => $status, 'personal' => $personal]);
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
        $status = new Status;
        $status->personal_id = $personal_id;
        if(isset($request->status))
        {
            $status_type = $request->input('status');
        }else{
            $status_type = null;
        }
        $status->date = $request->input('date');
        $status->date_en = $request->input('date_en');
        $status->status = $status_type;
        $status->save();

        return redirect()->route('status.show', ['personal_id' => $personal_id])->with('success', 'Successfully Inserted');
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
        return view('status.show', ['info' => $info]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stat = Config::get('constants.status');
        $status = Status::find($id);
        return view('status.edit', ['stat' => $stat, 'status' => $status]);
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
        $status = Status::find($id);
        if(isset($request->status)){
            $status_type = $request->input('status');
        }else{
            $status_type = null;
        }
        $status->status = $status_type;
        $status->save();

        return redirect()->route('status.show', ['id' => $status->personal_id])->with('success', 'Successfully Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $status = Status::find($id);
        $status->delete();

        return redirect()->route('status.show', ['id' => $status->personal_id])->with('success', 'Successfully Deleted');
    }
}
