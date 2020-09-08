<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PersonalInformation;
use App\Transfer;
use App\Post;
use \Carbon\Carbon;

class TransferController extends Controller
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
        $post = Post::pluck('posts', 'id');
        $personal = PersonalInformation::where('id', $request->id)->first();
        return view('transfer.create', ['post' => $post, 'personal' => $personal]);
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

        $transfers = $request->transfer;
        foreach($transfers as $transfer)
        {
            $trans = new Transfer();
            $trans->personal_id = $personal_id;
            $trans->start_date = $transfer['start_date'];
            $trans->end_date = $transfer['end_date'];
            $trans->start_date_en = $transfer['start_date_en'];
            // dd($trans->start_date_en);
            $trans->end_date_en = $transfer['end_date_en'];
            $trans->institution_transferedto = $transfer['institution_transferedto'];
            $trans->post_id = $transfer['post'];
            $trans->authority = $transfer['authority'];
            $trans->level = $transfer['level'];
            $trans->remarks = $transfer['remarks'];

            $start = Carbon::parse($trans->start_date_en)->DiffInMonths($trans->end_date_en);
            $trans->experience = $start;

            $trans->save();
        }
        return redirect()->route('transfer.show', ['personal_id' => $personal_id])->with('success', 'Successfully Inserted');
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
        return view('transfer.show', ['info' => $info]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::pluck('posts', 'id');
        $transfer = Transfer::find($id);

        return view('transfer.edit', ['post' => $post, 'transfer' => $transfer]);
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
        $transfer = Transfer::find($id);

        $transfer->start_date = $request->input('start_date');
        $transfer->end_date = $request->input('end_date');
        $transfer->institution_transferedto = $request->input('institution_transferedto');
        $transfer->post_id = $request->input('post');
        $transfer->authority = $request->input('authority');
        $transfer->level = $request->input('level');
        $transfer->remarks = $request->input('remarks');

        $transfer->save();
        return redirect()->route('transfer.show', ['id' => $transfer->personal_id])->with('success', 'Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transfer = Transfer::find($id);

        $transfer->delete();
        return redirect()->route('transfer.show', ['id' => $transfer->personal_id])->with('success', 'Successfully Deleted');
    }
}
