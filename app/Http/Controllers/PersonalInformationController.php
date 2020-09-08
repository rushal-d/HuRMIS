<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\District;
use App\PersonalInformation;
use App\Qualification;
use App\Training;
use App\Transfer;
use App\Promotion;
use App\Leave;
use App\Status;
use App\AdditionalInformation;
use App\Post;
use Illuminate\Support\Facades\Config;
use App\Exports\PersonalInfExport;
use App\Exports\PersonalExportView;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;

class PersonalInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title = "HuRMIS";
        $personalinfos = PersonalInformation::with('training')
        ->with(['promotion' => function($query){
            $query->with('post')->latest();
        }])
        ->with(['status' => function($query){
            $query->latest();
        }]);

        // $training = Training::pluck('title', 'id');

        $mun = District::pluck('mun_vdc_en', 'id');

        $district = District::pluck('district_name', 'district_id');

        $province = District::pluck('province', 'province');

        $institution = Training::pluck('institution_name', 'id');

        $post = Post::pluck('posts', 'id');

        $total = PersonalInformation::count();

        $gender = Config::get('constants.gender');

        $status = Config::get('constants.status');

    //    $training = $personalinfos
        // dd($training);

        if(!empty($request->training))
        {
            $personalinfos = $personalinfos->whereHas('training', function($query) use($request){
                $query->where('title', 'like', '%'. $request->training .'%');
            });
        }

        // if(!is_null($request->status) && in_array($request->status, array_keys(config('constants.status'))))
        // {
        //     $personalinfos = $personalinfos->whereHas('status', function($query) use($request){
        //         $query->where('status', $request->status)->latest();
        //     });
        // }
        

        if(!empty($request->pin))
        {
            $personalinfos = $personalinfos->where('pin', $request->pin);
        }

        if(!empty($request->full_name))
        {
            $personalinfos = $personalinfos->where('full_name_en', 'like', '%'.$request->full_name.'%');
        }
        
        if(!is_null($request->gender) && in_array($request->gender, array_keys(config('constants.gender'))))
        {
            $personalinfos = $personalinfos->where('gender', $request->gender);
        }

        if(!empty($request->location)){
            $personalinfos = $personalinfos->where('temporary_local_auth', $request->location);
        }

        if(!empty($request->district)){
            $personalinfos = $personalinfos->where('temporary_district', $request->district);
        }

        if(!empty($request->province)){
            $personalinfos = $personalinfos->where('temporary_pradesh', $request->province);
        }
        

        if(!empty($request->post))
        {
            $postest = $request->post;

            $personalinfos = $personalinfos->whereHas('promotion', function($query) use($postest){
                $query->where('post_id', $postest);
            });

            $needingPersonalInfo = [];

            foreach($personalinfos->get() as $personalinfo1){
                if($personalinfo1->promotion()->latest()->first()->post_id == $postest){
                    $needingPersonalInfo[] = $personalinfo1->id;        
                }
            }
            $personalinfos->whereIn('id', $needingPersonalInfo);
            //     $personalinfos = $personalinfos->where('post_id', $request->post);
        }
        
        // $personalinfos
        
        //  ->get();
        $personalinfos = $personalinfos->paginate(50);



        // dd($personalinfos);

        return view('personalinformation.index', ['district' => $district, 'status' => $status, 'province' => $province, 'gender' => $gender, 'total' => $total, 'post' => $post, 'mun' => $mun, 'institution' => $institution, 'title' => $title, 'personalinfos' => $personalinfos]);
    }

    public function reportdashboard(){
        return view('report.reportdashboard');
    }

    public function searchbyinstitution(Request $request){
        $title = "HuRMIS";
        $personalinfos = PersonalInformation::with('training')
        ->with(['promotion' => function($query){
            $query->with('post')->latest();
        }])
        ->with(['status' => function($query){
            $query->latest();
        }]);

        if(!empty($request->institution))
        {
            $institution_name = $request->institution;
            $transfer = Transfer::where('institution_transferedto', 'LIKE', '%'. $institution_name . '%')->latest()->first();
            $needingInstitutionInfo = [];

            $personalinfos = $personalinfos->whereHas('transfer', function($query) use($transfer){
                $query->where('id', $transfer->id); 
            });
            
            foreach($personalinfos->get() as $personalinfo1){
                if($personalinfo1->transfer()->latest()->first()->id == $transfer->id){
                    $needingInstitutionInfo[] = $personalinfo1->id;        
                    
                }
            }
            $personalinfos->whereIn('id', $needingInstitutionInfo);
        }
        $personalinfos = $personalinfos->paginate();
        return view('report.searchbyinstitution', ['personalinfos' => $personalinfos, 'title' => $title]);
    }

    public function searchbymun(Request $request){
        $title = "HuRMIS";
        $personalinfos = PersonalInformation::with('training')
        ->with(['promotion' => function($query){
            $query->with('post')->latest();
        }])
        ->with(['status' => function($query){
            $query->latest();
        }]);

        $mun = District::pluck('mun_vdc_en', 'id');
        if(!empty($request->location)){
            $personalinfos = $personalinfos->where('temporary_local_auth', $request->location);
        }
        $personalinfos = $personalinfos->paginate();
        return view('report.searchbymun', ['mun' => $mun, 'personalinfos' => $personalinfos, 'title' => $title]);
    }

    public function searchbygender(Request $request){
        $title = "HuRMIS";
        $personalinfos = PersonalInformation::with('training')
        ->with(['promotion' => function($query){
            $query->with('post')->latest();
        }])
        ->with(['status' => function($query){
            $query->latest();
        }]);
        $gender = Config::get('constants.gender');
        if(!is_null($request->gender) && in_array($request->gender, array_keys(config('constants.gender'))))
        {
            $personalinfos = $personalinfos->where('gender', $request->gender);
        }
        $personalinfos = $personalinfos->paginate();
        return view('report.searchbygender', ['title' => $title, 'personalinfos' => $personalinfos, 'gender' => $gender]);
    }

    public function searchbydistrict(Request $request){
        $title = "HuRMIS";
        $personalinfos = PersonalInformation::with('training')
        ->with(['promotion' => function($query){
            $query->with('post')->latest();
        }])
        ->with(['status' => function($query){
            $query->latest();
        }]);
        $district = District::pluck('district_name', 'district_id');
        if(!empty($request->district)){
            $personalinfos = $personalinfos->where('temporary_district', $request->district);
        }
        $personalinfos = $personalinfos->paginate();
        return view('report.searchbydistrict', ['title' => $title, 'personalinfos' => $personalinfos, 'district' => $district]);
    }

    public function searchbypost(Request $request){
        $title = "HuRMIS";
        $personalinfos = PersonalInformation::with('training')
        ->with(['promotion' => function($query){
            $query->with('post')->latest();
        }])
        ->with(['status' => function($query){
            $query->latest();
        }]);
        $post = Post::pluck('posts', 'id');
        if(!empty($request->post))
        {
            $postest = $request->post;
            $personalinfos = $personalinfos->whereHas('promotion', function($query) use($postest){
                $query->where('post_id', $postest);
                
            });
            $needingPersonalInfo = [];

            foreach($personalinfos->get() as $personalinfo1){
                if($personalinfo1->promotion()->latest()->first()->post_id == $postest){
                    $needingPersonalInfo[] = $personalinfo1->id;        
                    
                }
            }
            $personalinfos->whereIn('id', $needingPersonalInfo);
        }
        $personalinfos = $personalinfos->paginate();
        return view('report.searchbypost', ['title' => $title, 'personalinfos' => $personalinfos, 'post' => $post]);
    }

    public function searchbyprovince(Request $request){
        $title = "HuRMIS";
        $personalinfos = PersonalInformation::with('training')
        ->with(['promotion' => function($query){
            $query->with('post')->latest();
        }])
        ->with(['status' => function($query){
            $query->latest();
        }]);
        $province = District::pluck('province', 'province');
        if(!empty($request->province)){
            $personalinfos = $personalinfos->where('temporary_pradesh', $request->province);
        }
        $personalinfos = $personalinfos->paginate();
        return view('report.searchbyprovince', ['title' => $title, 'personalinfos' => $personalinfos, 'province' => $province]);
    }

    public function searchbystatus(Request $request){
        $title = "HuRMIS";
        $personalinfos = PersonalInformation::with('training')
        ->with(['promotion' => function($query){
            $query->with('post')->latest();
        }])
        ->with(['status' => function($query){
            $query->latest();
        }]);
        $status = Config::get('constants.status');
        if(!is_null($request->status) && in_array($request->status, array_keys(config('constants.status')))){
            $stat = $request->status;

            $personalinfos = $personalinfos->whereHas('status', function($query) use($stat){
                $query->where('status', $stat);
            });
            $needingStatInfo = [];
            foreach($personalinfos->get() as $personalinfo1){
                if($personalinfo1->status()->latest()->first()->status == $stat){
                    $needingStatInfo[] = $personalinfo1->id;
                }
            }
            $personalinfos->whereIn('id', $needingStatInfo);
        }
        $personalinfos = $personalinfos->paginate();
        return view('report.searchbystatus', ['title' => $title, 'personalinfos' => $personalinfos, 'status' => $status]);
    }

    public function searchbyexperience(Request $request){
        $title = "HuRMIS";
        $personalinfos = PersonalInformation::with('training')
        ->with(['promotion' => function($query){
            $query->with('post')->latest();
        }])
        ->with(['status' => function($query){
            $query->latest();
        }]);
        $experience = Config::get('constants.experience');
        if(!empty($request->experience))
        {
            $personalinfos = $personalinfos->whereHas('transfer', function($query) use($request){
                return $query->havingRaw('SUM(experience) >= ?', [$request->experience]);
            });
        }
        $personalinfos = $personalinfos->paginate();
        return view('report.searchbyexperience', ['title' => $title, 'experience' => $experience, 'personalinfos' => $personalinfos]);
    }

    public function searchbytraining(Request $request){
        $title = "HuRMIS";
        $province = District::pluck('province', 'province');
        $personalinfos = PersonalInformation::with('training')
        ->with(['promotion' => function($query){
            $query->with('post')->latest();
        }])
        ->with(['status' => function($query){
            $query->latest();
        }]);
        if(!empty($request->training))
        {
            $personalinfos = $personalinfos->whereHas('training', function($query) use($request){
                $query->where('title', 'like', '%'. $request->training .'%');
            });
        }
        if(!empty($request->province)){
            $personalinfos = $personalinfos->where('temporary_pradesh', $request->province);
        }
        $personalinfos = $personalinfos->paginate();
        return view('report.searchbytraining', ['title' => $title, 'personalinfos' => $personalinfos, 'province' => $province]);
    }

    public function report(Request $request)
    {
        $title = "List of people";
        $personalinfos = PersonalInformation::with('training')
        ->with(['promotion' => function($query){
            $query->with('post')->latest();
        }])
        ->with(['status' => function($query){
            $query->latest();
        }]);
        
        // $training = Training::pluck('title', 'id');

        $experience = Config::get('constants.experience');
        $mun = District::pluck('mun_vdc_en', 'id');

        $district = District::pluck('district_name', 'district_id');

        $province = District::pluck('province', 'province');

        $institution = Training::pluck('institution_name', 'id');

        $post = Post::pluck('posts', 'id');

        $total = PersonalInformation::count();

        $gender = Config::get('constants.gender');

        $status = Config::get('constants.status');

    //    $training = $personalinfos
        // dd($training);

        if(!empty($request->training))
        {
            $personalinfos = $personalinfos->whereHas('training', function($query) use($request){
                $query->where('title', 'like', '%'. $request->training .'%');
            });
        }

        // if(!is_null($request->status) && in_array($request->status, array_keys(config('constants.status'))))
        // {
        //     $personalinfos = $personalinfos->whereHas('status', function($query) use($request){
        //         $query->where('status', $request->status)->latest();
        //     });
        // }
        

        if(!empty($request->pin))
        {
            $personalinfos = $personalinfos->where('pin', $request->pin);
        }

        
        if(!is_null($request->gender) && in_array($request->gender, array_keys(config('constants.gender'))))
        {
            $personalinfos = $personalinfos->where('gender', $request->gender);
        }

        if(!empty($request->location)){
            $personalinfos = $personalinfos->where('temporary_local_auth', $request->location);
        }

        if(!empty($request->district)){
            $personalinfos = $personalinfos->where('temporary_district', $request->district);
        }

        if(!empty($request->province)){
            $personalinfos = $personalinfos->where('temporary_pradesh', $request->province);
        }

        if(!empty($request->experience))
        {
            $personalinfos = $personalinfos->whereHas('transfer', function($query) use($request){
                return $query->havingRaw('SUM(experience) >= ?', [$request->experience]);
            });
        }

        if(!empty($request->institution))
        {
            $institution_name = $request->institution;
            $transfer = Transfer::where('institution_transferedto', 'LIKE', '%'. $institution_name . '%')->latest()->first();
            $needingInstitutionInfo = [];

            $personalinfos = $personalinfos->whereHas('transfer', function($query) use($transfer){
                $query->where('id', $transfer->id); 
            });
            
            foreach($personalinfos->get() as $personalinfo1){
                if($personalinfo1->transfer()->latest()->first()->id == $transfer->id){
                    $needingInstitutionInfo[] = $personalinfo1->id;        
                    
                }
            }
            $personalinfos->whereIn('id', $needingInstitutionInfo);
        }

        if(!is_null($request->status) && in_array($request->status, array_keys(config('constants.status')))){
            $stat = $request->status;

            $personalinfos = $personalinfos->whereHas('status', function($query) use($stat){
                $query->where('status', $stat);
            });
            $needingStatInfo = [];
            foreach($personalinfos->get() as $personalinfo1){
                if($personalinfo1->status()->latest()->first()->status == $stat){
                    $needingStatInfo[] = $personalinfo1->id;
                }
            }
            $personalinfos->whereIn('id', $needingStatInfo);
        }

        if(!empty($request->post))
        {
            $postest = $request->post;
            $personalinfos = $personalinfos->whereHas('promotion', function($query) use($postest){
                $query->where('post_id', $postest);
                
            });
            $needingPersonalInfo = [];

            foreach($personalinfos->get() as $personalinfo1){
                if($personalinfo1->promotion()->latest()->first()->post_id == $postest){
                    $needingPersonalInfo[] = $personalinfo1->id;        
                    
                }
            }
            $personalinfos->whereIn('id', $needingPersonalInfo);
        }
        
        // $personalinfos
        
        //  ->get();
        $personalinfos = $personalinfos->paginate(50);



        // dd($personalinfos);

        return view('personalinformation.report', ['experience' => $experience, 'district' => $district, 'status' => $status, 'province' => $province, 'gender' => $gender, 'total' => $total, 'post' => $post, 'mun' => $mun, 'institution' => $institution, 'title' => $title, 'personalinfos' => $personalinfos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $religion = Config::get('constants.religion');

        $group = Config::get('constants.group');

        $gender = Config::get('constants.gender');

        $district = District::pluck('district_name', 'district_id');

        $local_auth = District::pluck('mun_vdc_en', 'id');

        $province = District::pluck('province', 'province');
        

        return view('personalinformation.create', ['gender' => $gender, 'group' => $group, 'religion' => $religion, 'province' => $province, 'district' => $district, 'local_auth' => $local_auth]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $this->validate($request, [
            'full_name_en' => 'required'
        ]);
       
        $personalinfo = new PersonalInformation;
        if($request->hasFile('image')){
            //Get filename with extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename. '_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('image')->storeAs('public/cover_images', $fileNameToStore);
        }else{
            $fileNameToStore = 'no.jpg';
        }
        $personalinfo->full_name_en = $request->input('full_name_en');
        $personalinfo->full_name_np = $request->input('full_name_np');
        $personalinfo->dob_en = $request->input('dob_en');
        $personalinfo->dob_np = $request->input('dob_np');
        if(isset($request->gender)){
            $gender_type = $request->input('gender');
        }else{
            $gender_type = null;
        }
        $personalinfo->gender = $gender_type;

        $personalinfo->pin = $request->input('pin');

        if(isset($request->religion)){
            $religion_name = $request->input('religion');
        }else{
            $religion_name = null;
        }
        $personalinfo->religion = $religion_name;

        if(isset($request->group)){
            $group_name = $request->input('group');
        }else{
            $group_name = null;
        }
        $personalinfo->group = $group_name;

        $personalinfo->email = $request->input('email');
        $personalinfo->phone = $request->input('phone');
        $personalinfo->mobile = $request->input('mobile');
        $personalinfo->marital_status = $request->input('marital_status');
        $personalinfo->permanent_pradesh = $request->input('permanent_pradesh');
        $personalinfo->temporary_pradesh = $request->input('temporary_pradesh');
        $personalinfo->permanent_district = $request->input('permanent_district');
        $personalinfo->temporary_district = $request->input('temporary_district');
        $personalinfo->permanent_local_auth = $request->input('permanent_local_auth');
        $personalinfo->temporary_local_auth = $request->input('temporary_local_auth');
        $personalinfo->permanent_ward = $request->input('permanent_ward');
        $personalinfo->temporary_ward = $request->input('temporary_ward');
        $personalinfo->temporary_full_address = $request->input('temporary_full_address');
        $personalinfo->permanent_full_address = $request->input('permanent_full_address');
        $personalinfo->image = $fileNameToStore;

        $personalinfo->save();

        $id = $personalinfo->id;
        // dd($id);

        return redirect()->route('personal.show', ['id' => $id])->with('success', 'Successfully Inserted');
    }

    public function sendSMS($content) {         
        $ch = curl_init();         
        curl_setopt($ch, CURLOPT_URL,"http://sms.bmpinfology.com/api/v3/sms?");         
        curl_setopt($ch, CURLOPT_POST, 1);         
        curl_setopt($ch, CURLOPT_POSTFIELDS,$content);         
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);         
        $server_output = curl_exec ($ch);         
        curl_close ($ch);         
        return $server_output;
    }

        public function phone(){
        $token = 'Xp5FYrORhfbmehhp470rmcARrDOg1cDAuV1';         
        $to = '9843094233';         
        $sender    = 'BMPInfology';         
        $message = 'Hello';

         // set post fields         
        $content =[         
            'token'=>rawurlencode($token),         
            'to'=>rawurlencode($to),         
            'sender'=>rawurlencode($sender),         
            'message'=>rawurlencode($message),         
        ];
                                        
        $thesmscentral_response = sendSMS($content);         
        echo $thesmscentral_response; 
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
        // dd($info->qualification);
        // $qualifications  = Qualification::where('personal_id', $info->id)->paginate();
        // $trainings = Training::where('personal_id', $info->id)->paginate();
        // $transfers = Transfer::where('personal_id', $info->id)->paginate();
        // $promotions = Promotion::where('personal_id', $info->id)->paginate();
        // $leaves = Leave::where('personal_id', $info->id)->paginate();
        // $statuses = Status::where('personal_id', $info->id)->paginate();
        // $additionals = AdditionalInformation::where('personal_id', $info->id)->paginate();
        // dd($qualification);
        // dd($id);
        
        return view('personalinformation.show', ['info' => $info]);
    }

    public function showByPin(Request $request)
    {
        // dd($request->all());
        $info = PersonalInformation::where('pis_number', $request->pin)->first();
        if(!empty($info)){
            return view('personalinformation.showbypin', ['info' => $info]);
        }
    }

    public function showByCouncil(Request $request)
    {
        $councils = Config::get('constants.council');
        $info = PersonalInformation::where('council', $request->council && 'council_number', $request->council_number)->first();
        if(!empty($info)){
            return view('personalinformation.show', ['info' => $info, 'councils' => $councils]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $religion = Config::get('constants.religion');

        $group = Config::get('constants.group');

        $gender = Config::get('constants.gender');

        $district = District::pluck('district_name', 'district_id');

        $local_auth = District::pluck('mun_vdc_en', 'id');

        $province = District::pluck('province', 'province');

        $personalinfo = PersonalInformation::find($id);
        
        return view('personalinformation.edit', ['gender' => $gender, 'religion' => $religion, 'group' => $group, 'district' => $district, 'local_auth' => $local_auth, 'province' => $province, 'personalinfo' => $personalinfo]);
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
        $personalinfo = PersonalInformation::find($id);
        $personalinfo->full_name_en = $request->input('full_name_en');
        $personalinfo->full_name_np = $request->input('full_name_np');
        $personalinfo->dob_en = $request->input('dob_en');
        $personalinfo->dob_np = $request->input('dob_np');
        $personalinfo->pin = $request->input('pin');

        if(isset($request->gender)){
            $gender_type = $request->input('gender');
        }else{
            $gender_type = null;
        }
        $personalinfo->gender = $gender_type;

        $personalinfo->pin = $request->input('pin');
        if(isset($request->religion)){
            $religion_name = $request->input('religion');
        }else{
            $religion_name = null;
        }

        $personalinfo->religion = $religion_name;

        if(isset($request->group)){
            $group_name = $request->input('group');
        }else{
            $group_name = null;
        }

        $personalinfo->group = $group_name;
        $personalinfo->email = $request->input('email');
        $personalinfo->phone = $request->input('phone');
        $personalinfo->mobile = $request->input('mobile');
        $personalinfo->marital_status = $request->input('marital_status');
        $personalinfo->permanent_pradesh = $request->input('permanent_pradesh');
        $personalinfo->temporary_pradesh = $request->input('temporary_pradesh');
        $personalinfo->permanent_district = $request->input('permanent_district');
        $personalinfo->temporary_district = $request->input('temporary_district');
        $personalinfo->permanent_local_auth = $request->input('permanent_local_auth');
        $personalinfo->temporary_local_auth = $request->input('temporary_local_auth');
        $personalinfo->permanent_ward = $request->input('permanent_ward');
        $personalinfo->temporary_ward = $request->input('temporary_ward');
        $personalinfo->temporary_full_address = $request->input('temporary_full_address');
        $personalinfo->permanent_full_address = $request->input('permanent_full_address');

        $personalinfo->save();
        return redirect()->route('personal.index')->with('success', 'Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $personalinfo = PersonalInformation::find($id);
        // dd($personalinfo->training);

        $qualification = Qualification::where('personal_id', $personalinfo->id)->delete();
        $training = Training::where('personal_id', $personalinfo->id)->delete();
        $transfer = Transfer::where('personal_id', $personalinfo->id)->delete();
        $promotion = Promotion::where('personal_id', $personalinfo->id)->delete();
        $status = Status::where('personal_id', $personalinfo->id)->delete();
        $leave = Leave::where('personal_id', $personalinfo->id)->delete();
        $additional = AdditionalInformation::where('personal_id', $personalinfo->id)->delete();
        $personalinfo->delete();

        return redirect()->route('personal.index')->with('success', 'Successfully Deleted');
    }

    public function search(){
        $council = Config::get('constants.council');
        return view('personalinformation.search', ['council' => $council]);
    }

    public function dashboard(){
        return view('personalinformation.dashboard');
    }

    public function export()
    {
        return Excel::download(new PersonalInfExport, 'personal.xlsx');
    }

    public function exportView(Request $request)
    {
        // dd($request->all());
        $personalinfos = PersonalInformation::with('training')->with(['promotion' => function($query){
            $query->with('post')->latest();
        }])
        ->with(['status' => function($query){
            $query->latest();
        }]);

        if(!empty($request->training))
        {
            $personalinfos = $personalinfos->whereHas('training', function($query) use($request){
                $query->where('title', 'like', '%'. $request->training .'%');
            });
        }

        if(!is_null($request->status) && in_array($request->status, array_keys(config('constants.status'))))
        {
            $personalinfos = $personalinfos->whereHas('status', function($query) use($request){
                $query->where('status', $request->status)->latest();
            });
        }
        

        if(!empty($request->pin))
        {
            $personalinfos = $personalinfos->where('pin', $request->pin);
        }

        
        if(!is_null($request->gender) && in_array($request->gender, array_keys(config('constants.gender'))))
        {
            $personalinfos = $personalinfos->where('gender', $request->gender);
        }

        if(!empty($request->location)){
            $personalinfos = $personalinfos->where('temporary_local_auth', $request->location);
        }

        if(!empty($request->district)){
            $personalinfos = $personalinfos->where('temporary_district', $request->district);
        }

        if(!empty($request->province)){
            $personalinfos = $personalinfos->where('temporary_pradesh', $request->province);
        }

        if(!empty($request->experience))
        {
            $personalinfos = $personalinfos->whereHas('transfer', function($query) use($request){
                return $query->havingRaw('SUM(experience) >= ?', [$request->experience]);
            });
        }

        if(!empty($request->institution))
        {
            $institution_name = $request->institution;
            $transfer = Transfer::where('institution_transferedto', 'LIKE', '%'. $institution_name . '%')->first();
            $needingInstitutionInfo = [];

            $personalinfos = $personalinfos->whereHas('transfer', function($query) use($transfer){
                $query->where('id', $transfer->id); 
            });
            
            foreach($personalinfos->get() as $personalinfo1){
                if($personalinfo1->transfer()->latest()->first()->id == $transfer->id){
                    $needingInstitutionInfo[] = $personalinfo1->id;        
                    
                }
            }
            $personalinfos->whereIn('id', $needingInstitutionInfo);
        }

        if(!empty($request->post))
        {
            $postest = $request->post;

            $personalinfos = $personalinfos->whereHas('promotion', function($query) use($postest){
                $query->where('post_id', $postest);
            });

            $needingPersonalInfo = [];

            foreach($personalinfos->get() as $personalinfo1){
                if($personalinfo1->promotion()->latest()->first()->post_id == $postest){
                    $needingPersonalInfo[] = $personalinfo1->id;        
                }
            }
            $personalinfos->whereIn('id', $needingPersonalInfo);
            //     $personalinfos = $personalinfos->where('post_id', $request->post);
        }
        
        // $personalinfos
        
        //  ->get();
        $personalinfos = $personalinfos->get();
        return Excel::download(new PersonalExportView($personalinfos), 'personal.xlsx');
    }
}
