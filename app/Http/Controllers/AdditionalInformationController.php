<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PersonalInformation;
use App\AdditionalInformation;

class AdditionalInformationController extends Controller
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
        return view('additionalinformation.create', ['personal' => $personal]);
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

        $additional = new AdditionalInformation;
        $additional->personal_id = $personal_id;
        $additional->appointment_date = $request->input('appointment_date');
        $additional->appointment_date_en = $request->input('appointment_date_en');
        $additional->provident_fund_no = $request->input('provident_fund_no');
        $additional->sheet_no = $request->input('sheet_no');
        $additional->cit_no = $request->input('cit_no');
        $additional->citizenship_no = $request->input('citizenship_no');
        $additional->insurance_no = $request->input('insurance_no');
        $additional->remarks = $request->input('remarks');
        $additional->notes = $request->input('notes');
        $additional->save();

        return redirect()->route('additional.show', ['personal_id' => $personal_id])->with('success', 'Successfully Inserted');
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
        return view('additionalinformation.show', ['info' => $info]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $additional = AdditionalInformation::find($id);
        return view('additionalinformation.edit', ['additional' => $additional]);
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


        $additional = AdditionalInformation::find($id);
        $additional->appointment_date = $request->input('appointment_date');
        $additional->provident_fund_no = $request->input('provident_fund_no');
        $additional->sheet_no = $request->input('sheet_no');
        $additional->cit_no = $request->input('cit_no');
        $additional->citizenship_no = $request->input('citizenship_no');
        $additional->insurance_no = $request->input('insurance_no');
        $additional->save();

        return redirect()->route('additional.show', ['id' => $additional->personal_id])->with('success', 'Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $additional = AdditionalInformation::find($id);
        $additional->delete();

        return redirect()->route('additional.show', ['id' => $additional->personal_id])->with('success', 'Successfully Deleted');
    }
}
