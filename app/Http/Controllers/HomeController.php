<?php

namespace App\Http\Controllers;

use App\District;
use App\PersonalInformation;
use App\Post;
use App\Promotion;
use App\Training;
use App\Transfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function sampleTrainingData(Request $request){
        $tranings = Training::where('id', '<', 92)->get();
        foreach ($tranings as $traning){
           $emps = PersonalInformation::where('permanent_pradesh', 3)->where('full_name_en', 'LIKE', '%Dr.%')->get()->random(2);
           foreach ($emps as $emp){
               $new_training = $traning->replicate();
               $new_training->personal_id = $emp->id;
              $new_training->save();
           }

        }
    }

    public function importData(Request $request){
        $emps = DB::table('emps')->paginate(5000);


        /*$posts = DB::table('emps')->groupBy('transfer_post')->distinct()->get();
        foreach ($posts as $post){
            $postModel = new Post();
            $postModel->posts = $post->transfer_post;
            $postModel->save();
        }*/



        foreach ($emps as $emp){
            $personal_information = new PersonalInformation();
            $personal_information->full_name_en = $emp->employee_name;
            $personal_information->dob_en = $emp->birth_date;
            $personal_information->dob_en = $emp->birth_date;
        }
        $status = false;
        DB::beginTransaction();
        try {
            foreach ($emps as $emp) {
                $personal_information = new PersonalInformation();
                $personal_information->full_name_en = trim($emp->employee_name);
                $personal_information->dob_en = date('Y-m-d', strtotime($emp->birth_date));
                $personal_information->permanent_district = $this->districtToProvince($emp->permanent_address);
                $district = District::where('id', $personal_information->permanent_district)->first();
                if(!empty($district)){
                    $personal_information->permanent_pradesh = $district->province;
                    $personal_information->temporary_pradesh = $district->province;
                    $personal_information->temporary_district = $district->district_id;
                    $personal_information->permanent_district = $district->district_id;
                }
                $personal_information->pin = $emp->pin;


                if ($personal_information->save()) {
                    $transfer = new Transfer();
                    $transfer->personal_id = $personal_information->id;
                    $transfer->start_date_en = $emp->acurrent_date;
                    $transfer->post_id = $this->getPostIDbyPostName($emp->init_post);
                    $transfer->institution_transferedto = $emp->acurrent_institution;
                    if (!empty($emp->transfer_post)) {
                        $transfer->post_id = $this->getPostIDbyPostName($emp->transfer_post);
                        $transfer->institution_transferedto = $emp->transfer_institution;
                    }
                    $transfer->save();
                    $promotion = new Promotion();
                    $promotion->personal_id = $transfer->personal_id;
                    $promotion->post_id = $transfer->post_id;
                    $promotion->save();
                    $status = true;
                }
            }
        }catch (\Exception $e){
            DB::rollBack();
            $status = false;
            echo 'error';
            dd($e);
        }
        if($status){
            DB::commit();
            echo 'DONE!';
        }

        /*$emps = PersonalInformation::get();
        foreach ($emps as $emp){
            $district = District::where('id', $emp->permanent_district)->first();
            if(!empty($district)){

                $emp->permanent_pradesh = $district->province;
                $emp->temporary_pradesh = $district->province;
                $emp->temporary_district = $district->district_id;
                $emp->permanent_district = $district->district_id;
                $emp->save();
            }

        }*/
        /* $transfers = Transfer::get();

         foreach ($transfers as $transfer) {
             $promotion = new Promotion();
             $promotion->personal_id = $transfer->personal_id;
             $promotion->post_id = $transfer->post_id;
             $promotion->save();
         }*/





    }

    public function districtToProvince($district){
        $district = District::where('district_name', 'LIKE', '%'.$district.'%')->first();
        if(!empty($district)){

            return $district->id;
        }
        return null;
    }

    public function getPostIDbyPostName($post){
        $postModel = Post::where('posts', 'LIKE', '%'.$post.'%')->first();
        if(!empty($postModel)){
            return $postModel->id;
        }
        return null;
    }
}
