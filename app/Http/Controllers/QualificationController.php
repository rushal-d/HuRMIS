<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\PersonalInformation;
use App\Qualification;

class QualificationController extends Controller
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
        // dd($personal);
        return view('qualification.create', ['personal' => $personal]);
    }

    public function sendSMS($mobile, $message)
    {
        $status_mesg = false;
        $url = 'http://sms.bmpinfology.com/api/v3/sms?';
        $content = [];
        $content['token'] = 'Xp5FYrORhfbmehhp470rmcARrDOg1cDAuV1';
        $content['to'] = rawurldecode($mobile);
        $content['message'] = rawurldecode($message);
        $content['sender'] = rawurldecode('HuRMIS');

        $client = new Client();
        $response = $client->request('POST', $url, [
            'form_params' => $content
        ]);
        if ($response->getStatusCode() == 200) {
            $status_mesg = true;
        }

        return $status_mesg;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'education["+count+"][degree]' => 'required'
        // ]);
        $personal_id = $request->personal_id;
        $employee = PersonalInformation::find($personal_id);
        // dd($personal_id);
        $educations = $request->education;
        foreach($educations as $education) {
            $qualification = new Qualification();
            $qualification->personal_id = $personal_id;
            $qualification->degree = $education['degree'];
            $qualification->year = $education['year'];
            $qualification->grade = $education['grade'];
            $qualification->major_subject = $education['major_subject'];
            $qualification->institution = $education['institution'];
            $qualification->sponsor = $education['sponsor'];

            if($qualification->save()){
                //send sms when education is updated
                if(!empty($employee->mobile)){
                    $this->sendSMS($employee->mobile, 'Dear '. $employee->full_name_en.', your educational qualification "'. $qualification->degree .
                    '" has been updated in HuRMIS.');
                }
            }
        }

        // dd($qualification);
        return redirect()->route('personal.show', ['personal_id' => $personal_id])->with('success', 'Successfully Inserted');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $qualification = Qualification::find($id);
        return view('qualification.edit', ['qualification' => $qualification]);
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
        $qualification = Qualification::find($id);

        $employee = PersonalInformation::find($qualification->personal_id);


        $qualification->degree = $request->input('degree');
        $qualification->year = $request->input('year');
        $qualification->grade = $request->input('grade');
        $qualification->major_subject = $request->input('major_subject');
        $qualification->institution = $request->input('institution');
        $qualification->sponsor = $request->input('sponsor');

        if($qualification->save()){
            //send sms when education is updated
            if(!empty($employee->mobile)){

                $this->sendSMS($employee->mobile, 'Dear '. $employee->full_name_en.', your educational qualification "'. $qualification->degree .
                    '" has been updated in HuRMIS.');
            }
        }

        return redirect()->route('personal.show', ['id' => $qualification->personal_id])->with('success', 'Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $qualification = Qualification::find($id);
        $qualification->delete();

        return redirect()->route('personal.show', ['id' => $qualification->personal_id])->with('success', 'Successfully Deleted');
    }
}
