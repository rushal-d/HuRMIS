<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PersonalInformation;
use App\Promotion;
use App\Post;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
        // dd($personal);
        return view('promotion.create', ['post' => $post, 'personal' => $personal]);
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
        $promotions = $request->promotion;
        foreach($promotions as $promotion)
        {
            $pro = new Promotion();
            $pro->personal_id = $personal_id;
            $pro->date_of_effect = $promotion['date_of_effect'];
            $pro->decision_date = $promotion['decision_date'];
            $pro->date_of_effect_en = $promotion['date_of_effect_en'];
            $pro->decision_date_en = $promotion['decision_date_en'];
            $pro->post_id = $promotion['post'];
            $pro->authority = $promotion['authority'];
            $pro->level = $promotion['level'];
            $pro->remarks = $promotion['remarks'];

            $pro->save();
        }
        return redirect()->route('promotion.show', ['personal_id' => $personal_id])->with('success', 'Successfully Inserted');
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
        return view('promotion.show', ['info' => $info]);
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
        $promotion = Promotion::find($id);
        return view('promotion.edit', ['post' => $post, 'promotion' => $promotion]);
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
        $promotion = Promotion::find($id);
        $promotion->date_of_effect = $request->input('date_of_effect');
        $promotion->decision_date = $request->input('decision_date');
        $promotion->post_id = $request->input('post');
        $promotion->authority = $request->input('authority');
        $promotion->level = $request->input('level');
        $promotion->remarks = $request->input('remarks');
        $promotion->save();

        return redirect()->route('promotion.show', ['id' => $promotion->personal_id])->with('success', 'Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $promotion = Promotion::find($id);
        $promotion->delete();

        return redirect()->route('promotion.show', ['id' => $promotion->personal_id])->with('success', 'Successfully Deleted');
    }
}
