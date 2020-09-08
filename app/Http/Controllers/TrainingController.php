<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PersonalInformation;
use App\Training;
use App\Post;

class TrainingController extends Controller
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
        return view('training.create',['personal' => $personal]);
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
        // dd($personal_id);
        $trainings = $request->training;
        foreach($trainings as $training)
        {
            $train = new Training();
            $train->personal_id = $personal_id;
            $train->title = $training['title'];
            $train->start_date = $training['start_date'];
            $train->end_date = $training['end_date'];         
            $train->start_date_en = $training['start_date_en'];
            $train->end_date_en = $training['end_date_en'];
            $train->institution_name = $training['institution_name'];
            $train->subject = $training['subject'];
            $train->sponsor = $training['sponsor'];
            $train->country_of_training = $training['country_of_training'];

            $train->save();
        }

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
        $info = PersonalInformation::find($id);
        // dd($info);
        return view('training.show', ['info' => $info]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $training = Training::find($id);
        return view('training.edit', ['training' => $training]);
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
        $training = Training::find($id);

        $training->title = $request->input('title');
        $training->start_date = $request->input('start_date');
        $training->end_date = $request->input('end_date');
        $training->start_date_en = $request->input('start_date_en');
        $training->end_date_en = $request->input('end_date_en');
        $training->institution_name = $request->input('institution_name');
        $training->subject = $request->input('subject');
        $training->sponsor = $request->input('sponsor');
        $training->country_of_training = $request->input('country_of_training');

        $training->save();

        return redirect()->route('training.show', ['id' => $training->personal_id])->with('success', 'Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $training = Training::find($id);

        $training->delete();
        return redirect()->route('training.show', ['id' => $training->personal_id])->with('success', 'Successfully Deleted');
    }
}
