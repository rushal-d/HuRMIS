@extends('layouts.app')
@section('styles')
<style>
    div.anchor {
    display: block;
    position: relative;
    top: -100px;
    visibility: hidden;
}
</style>
@endsection
@section('content')

    <section class="padding-block">
        <div class="container-fluid">
            <form id="contact" method="post" class="form create" role="form">
                <div class="row">
                    <div class="col-lg-12"><!-- first column --> 
                        <div class="card custom-card create-wrapper">
                            <div class="card-header level">
                                <a href="{{route('personal.search')}}" class="btn custom-btn btn-danger" style="float:left;margin-bottom:5px;">Go Back</a>                               {{-- {{dd($info->religion)}} --}}
                            <h3 class="flex">{{$info->full_name_en}}'s Personal Information</h3>
                        </div>
                            <div class="card-body">
                                <div class="contact-form">
                                    <div class="row"><!-- main row open-->
                                        <!-- opening of one field -->
                                        <div class="col-lg-2" style="height:190px">
                                            {{-- <label class="col-xs-4 col-md-4">ID</label> --}}
                                            <span class="col-xs-8 col-md-8 form-group">
                                            <img width="100%" height="100%" src='{{asset("storage/cover_images/{$info->image}")}}'>
                                            </span>
                                        </div>
                                        <div class="col-lg-10">
                                            <div class="row">
                                        <div class="col-lg-4">
                                            <div class="row">
                                                <label class="col-xs-4 col-md-4">ID</label>
                                                <span class="col-xs-8 col-md-8 form-group">
                                                    <p>{{$info->pin}}</p>
                                                </span>
                                            </div> 
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row">
                                                <label class="col-xs-4 col-md-4">Full Name</label>
                                                <span class="col-xs-8 col-md-8 form-group">
                                                    <p>{{$info->full_name_en}}</p>
                                                </span>
                                            </div> 
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row">
                                                <label class="col-xs-4 col-md-4">Email</label>
                                                <span class="col-xs-8 col-md-8 form-group">
                                                    <p>{{$info->email}}</p>
                                                </span>
                                            </div> 
                                        </div>
                                        @if($info->gender != null)
                                        <div class="col-lg-4">
                                            <div class="row">
                                                <label class="col-xs-4 col-md-4">Gender</label>
                                                <span class="col-xs-8 col-md-8 form-group">
                                                    <p>{{config('constants.gender')[$info->gender]}}</p>
                                                </span>
                                            </div> 
                                        </div>
                                        @endif
                                        @if($info->religion != null)
                                        <div class="col-lg-4">
                                            <div class="row">
                                                <label class="col-xs-4 col-md-4">Religion</label>
                                                <span class="col-xs-8 col-md-8 form-group">
                                                    <p>{{config('constants.religion')[$info->religion]}}</p>
                                                </span>
                                            </div> 
                                        </div>
                                        @endif
                                        @if($info->group != null)
                                        <div class="col-lg-4">
                                            <div class="row">
                                                <label class="col-xs-4 col-md-4">Group</label>
                                                <span class="col-xs-8 col-md-8 form-group">
                                                    <p>{{config('constants.group')[$info->group]}}</p>
                                                </span>
                                            </div> 
                                        </div>
                                        @endif
                                        <div class="col-lg-4">
                                            <div class="row">
                                                <label class="col-xs-4 col-md-4">D.O.B(EN)</label>
                                                <span class="col-xs-8 col-md-8 form-group">
                                                    <p>{{$info->dob_en}}</p>
                                                </span>
                                            </div> 
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row">
                                                <label class="col-xs-4 col-md-4">D.O.B (NP)</label>
                                                <span class="col-xs-8 col-md-8 form-group">
                                                    <p>{{$info->dob_np}}</p>
                                                </span>
                                            </div> 
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row">
                                                <label class="col-xs-4 col-md-4">Phone</label>
                                                <span class="col-xs-8 col-md-8 form-group">
                                                    <p>{{$info->phone}}</p>
                                                </span>
                                            </div> 
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row">
                                                <label class="col-xs-4 col-md-4">Marital Status</label>
                                                <span class="col-xs-8 col-md-8 form-group">
                                                    <p>{{$info->marital_status}}</p>
                                                </span>
                                            </div> 
                                        </div>
                                        @if($info->temporary_local_auth != null)
                                        <div class="col-lg-4">
                                            <div class="row">
                                                <label class="col-xs-4 col-md-4">Temp. Local Auth</label>
                                                <span class="col-xs-8 col-md-8 form-group">
                                                    <p>{{$info->temp_local->mun_vdc_en}}</p>
                                                </span>
                                            </div> 
                                        </div>
                                        @endif
                                        @if($info->permanent_local_auth != null)
                                        <div class="col-lg-4">
                                            <div class="row">
                                                <label class="col-xs-4 col-md-4">Perm. Local Auth</label>
                                                <span class="col-xs-8 col-md-8 form-group">
                                                    <p>{{$info->perm_local->mun_vdc_en}}</p>
                                                </span>
                                            </div> 
                                        </div>
                                        @endif
                                        @if($info->temporary_district != null)
                                        <div class="col-lg-4">
                                            <div class="row">
                                                <label class="col-xs-4 col-md-4">Temp. District</label>
                                                <span class="col-xs-8 col-md-8 form-group">
                                                    <p>{{$info->temp_district->district_name}}</p>
                                                </span>
                                            </div> 
                                        </div>
                                        @endif
                                        @if($info->permanent_district != null)
                                        <div class="col-lg-4">
                                            <div class="row">
                                                <label class="col-xs-4 col-md-4">Perm. District</label>
                                                <span class="col-xs-8 col-md-8 form-group">
                                                    <p>{{$info->perm_district->district_name}}</p>
                                                </span>
                                            </div> 
                                        </div>
                                        @endif
                                        @if($info->permanent_pradesh != null)
                                        <div class="col-lg-4">
                                            <div class="row">
                                                <label class="col-xs-4 col-md-4">Perm. Pradesh</label>
                                                <span class="col-xs-8 col-md-8 form-group">
                                                    <p>{{$info->perm_pradesh->province}}</p>
                                                </span>
                                            </div> 
                                        </div>
                                        @endif
                                        @if($info->temporary_pradesh != null)
                                        <div class="col-lg-4">
                                            <div class="row">
                                                <label class="col-xs-4 col-md-4">Temp. Pradesh</label>
                                                <span class="col-xs-8 col-md-8 form-group">
                                                    <p>{{$info->temp_pradesh->province}}</p>
                                                </span>
                                            </div> 
                                        </div>
                                        @endif
                                        <div class="col-lg-4">
                                            <div class="row">
                                                <label class="col-xs-4 col-md-4">Temp. Ward</label>
                                                <span class="col-xs-8 col-md-8 form-group">
                                                    <p>{{$info->temporary_ward}}</p>
                                                </span>
                                            </div> 
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row">
                                                <label class="col-xs-4 col-md-4">Perm. Ward</label>
                                                <span class="col-xs-8 col-md-8 form-group">
                                                    <p>{{$info->permanent_ward}}</p>
                                                </span>
                                            </div> 
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row">
                                                <label class="col-xs-4 col-md-4">Temp. Full Address</label>
                                                <span class="col-xs-8 col-md-8 form-group">
                                                    <p>{{$info->temporary_full_address}}</p>
                                                </span>
                                            </div> 
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row">
                                                <label class="col-xs-4 col-md-4">Perm. Full Address</label>
                                                <span class="col-xs-8 col-md-8 form-group">
                                                    <p>{{$info->permanent_full_address}}</p>
                                                </span>
                                            </div> 
                                        </div>
                                            </div>
                                        </div>
                                    </div><!-- row main close -->

                                </div>
                            </div>
                        </div>
                        <div class="title" style="margin-bottom:10px;">
                        <a href="#quali" class="btn custom-btn btn-success">Qualifications</a>
                        <a href="#training" class="btn custom-btn btn-success">Trainings</a>
                        <a href="#transfer" class="btn custom-btn btn-success">Transfers</a>
                        <a href="#promotion" class="btn custom-btn btn-success">Promotion</a>
                        <a href="#leave" class="btn custom-btn btn-success">Leave</a>
                        <a href="#status" class="btn custom-btn btn-success">Status</a>
                        <a href="#additional" class="btn custom-btn btn-success">Additional Information</a>

                        </div>
                        {{-- Qualifications --}}
                        <div class="anchor" id="quali"></div>
                        <div class="card custom-card create-wrapper">
                            <div class="card-header level">
                                    <h3 class="" style="float:left">Educational Qualifications</h3>
                                    {{-- <a href="{{route('qualification.create', ['id' => $info->id])}}" class="btn custom-btn btn-success" style="margin-bottom:5px;float:right">Add Qualifications</a> --}}
                            </div>
                            <div class="card-body">
                                <div class="contact-form">
                                    <div class="row"><!-- main row open-->
                                        <div class="col-lg-12">
                                        <!-- opening of one field -->
                                        <div class="table-responsive">
                                                <table class="table table-bordered department-table">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">S.No.</th>
                                                        <th scope="col">Degree</th>
                                                        <th scope="col">Year</th>
                                                        <th scope="col">Grade</th>
                                                        <th scope="col">Major Subject</th>
                                                        <th scope="col">Institution</th>
                                                        <th scope="col">Sponsor</th>
                                                        {{-- <th scope="col">Action</th>. --}}
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @forelse($info->qualification as $qualification)
                
                                                        <tr>
                                                            <td>{{$loop->iteration}}</td>
                                                            <td>{{$qualification->degree}}</td>
                                                            <td>{{$qualification->year}}</td>
                                                            <td>{{$qualification->grade}}</td>
                                                            <td>{{$qualification->major_subject}}</td>
                                                            <td>{{$qualification->institution}}</td>
                                                            <td>{{$qualification->sponsor}}</td>
                                                            {{-- <td>
                                                                <a href="{{route('qualification.edit', $qualification->id)}}"
                                                                    class="btn btn-sm btn-primary">
                                                                    <i class="far fa-edit" data-toggle="tooltip" data-placement="top"
                                                                        title="Edit"></i>
                                                                </a>
                                                                <a href="{{route('qualification.destroy', $qualification->id)}}" data-uuid="{{$qualification->id}}"
                                                                    data-name="{{$qualification->name}}"
                                                                    class="btn btn-sm btn-danger">
                                                                    <i class="fas fa-trash" data-toggle="tooltip"
                                                                    data-placement="top" title="Delete"></i></a>
                                                            </td> --}}
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan="100%" class="text-center">Currently there is no data.
                                                            </td>
                                                        </tr>
                                                    @endforelse
                
                                                    </tbody>
                                                </table>
                                                {{-- <div class="text-center">{{$qualifications->links()}}</div> --}}
                                            </div> 
                                    </div><!-- row main close -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="anchor" id="training"></div>
                            {{-- Training --}}
                        <div class="card custom-card create-wrapper">
                            <div class="card-header level">
                            <h3 class="" style="float:left">Training Details</h3>
                            {{-- <a href="{{route('training.create', ['id' => $info->id])}}" class="btn btn-success" style="margin-bottom:5px;float:right">Add New <i class="fas fa-plus"></i></a> --}}
                            </div>
                            <div class="card-body">
                                <div class="contact-form">
                                    <div class="row"><!-- main row open-->
                                        <!-- opening of one field -->
                                        <div class="table-responsive">
                                                <table class="table table-bordered department-table">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">S.No.</th>
                                                        <th scope="col">Title</th>
                                                        <th scope="col">Start Date</th>
                                                        <th scope="col">End Date</th>
                                                        <th scope="col">Institution</th>
                                                        <th scope="col">Subject</th>
                                                        <th scope="col">Sponsor</th>
                                                        <th scope="col">Country</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @forelse($info->training as $training)
                
                                                        <tr>
                                                            <td>{{$loop->iteration}}</td>
                                                            <td>{{$training->title}}</td>
                                                            <td>{{$training->start_date}}</td>
                                                            <td>{{$training->end_date}}</td>
                                                            <td>{{$training->institution_name}}</td>
                                                            <td>{{$training->subject}}</td>
                                                            <td>{{$training->sponsor}}</td>
                                                            <td>{{$training->country_of_training}}</td>
                                                            {{-- <td>
                                                                <a href="{{route('training.edit', $training->id)}}"
                                                                    class="btn btn-sm btn-primary">
                                                                    <i class="far fa-edit" data-toggle="tooltip" data-placement="top"
                                                                        title="Edit"></i>
                                                                </a>
                                                                <a href="{{route('training.destroy', $training->id)}}" data-uuid="{{$training->id}}"
                                                                    data-name="{{$training->name}}"
                                                                    class="btn btn-sm btn-danger">
                                                                    <i class="fas fa-trash" data-toggle="tooltip"
                                                                    data-placement="top" title="Delete"></i></a>
                                                            </td> --}}
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan="100%" class="text-center">Currently there is no data.
                                                            </td>
                                                        </tr>
                                                    @endforelse
                
                                                    </tbody>
                                                </table>
                                                {{-- <div class="text-center">{{$qualifications->links()}}</div> --}}
                                            </div> 
                                    </div><!-- row main close -->
                                </div>
                            </div>
                        </div>  
                        <div class="anchor" id="transfer"></div>
                        {{-- Transfer --}}
                        <div class="card custom-card create-wrapper">
                            <div class="card-header level">
                            <h3 class="" style="float:left">Transfer Details</h3>
                            {{-- <a href="{{route('transfer.create', ['id' => $info->id])}}" class="btn btn-success" style="float:right;margin-bottom:5px">Add New <i class="fas fa-plus"></i></a> --}}
                            </div>
                            <div class="card-body">
                                <div class="contact-form">
                                    <div class="row"><!-- main row open-->
                                        <!-- opening of one field -->
                                        <div class="table-responsive">
                                                <table class="table table-bordered department-table">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">S.No.</th>
                                                        <th scope="col">Start Date</th>
                                                        <th scope="col">End Date</th>
                                                        <th scope="col">Institution Transfered To</th>
                                                        <th scope="col">Post</th>
                                                        <th scope="col">Authority</th>
                                                        <th scope="col">Level</th>
                                                        <th scope="col">Remarks</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @forelse($info->transfer as $transfer)
                
                                                        <tr>
                                                            <td>{{$loop->iteration}}</td>
                                                            <td>{{$transfer->start_date}}</td>
                                                            <td>{{$transfer->end_date}}</td>
                                                            <td>{{$transfer->institution_transferedto}}</td>
                                                            <td>
                                                                @if($transfer->post_id != null)
                                                                    {{$transfer->post->posts}}
                                                                @endif
                                                            </td>
                                                            <td>{{$transfer->authority}}</td>
                                                            <td>{{$transfer->level}}</td>
                                                            <td>{{$transfer->remarks}}</td>
                                                            {{-- <td>
                                                                <a href="{{route('transfer.edit', $transfer->id)}}"
                                                                    class="btn btn-sm btn-primary">
                                                                    <i class="far fa-edit" data-toggle="tooltip" data-placement="top"
                                                                        title="Edit"></i>
                                                                </a>
                                                                <a href="{{route('transfer.destroy', $transfer->id)}}" data-uuid="{{$transfer->id}}"
                                                                    data-name="{{$transfer->name}}"
                                                                    class="btn btn-sm btn-danger">
                                                                    <i class="fas fa-trash" data-toggle="tooltip"
                                                                    data-placement="top" title="Delete"></i></a>
                                                            </td> --}}
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan="100%" class="text-center">Currently there is no data.
                                                            </td>
                                                        </tr>
                                                    @endforelse
                
                                                    </tbody>
                                                </table>
                                                {{-- <div class="text-center">{{$qualifications->links()}}</div> --}}
                                            </div> 
                                    </div><!-- row main close -->

                                </div>
                            </div>
                        </div> 
                        <div class="anchor" id="promotion"></div>
                        {{-- Promotion --}}
                        <div class="card custom-card create-wrapper">
                            <div class="card-header level">
                            <h3 class="" style="float:left">Promotion Details</h3>
                            {{-- <a href="{{route('promotion.create', ['id' => $info->id])}}" class="btn btn-success" style="margin-bottom:5px;float:right">Add New <i class="fas fa-plus"></i></a> --}}
                            </div>
                            <div class="card-body">
                                <div class="contact-form">
                                    <div class="row"><!-- main row open-->
                                        <!-- opening of one field -->
                                        <div class="table-responsive">
                                                <table class="table table-bordered department-table">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">S.No.</th>
                                                        <th scope="col">Date of Effect</th>
                                                        <th scope="col">Decision Date</th>
                                                        <th scope="col">Post</th>
                                                        <th scope="col">Authority</th>
                                                        <th scope="col">Level</th>
                                                        <th scope="col">Remarks</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @forelse($info->promotion as $promotion)
                
                                                        <tr>
                                                            <td>{{$loop->iteration}}</td>
                                                            <td>{{$promotion->date_of_effect}}</td>
                                                            <td>{{$promotion->decision_date}}</td>
                                                            <td>
                                                                @if($promotion->post_id != null)
                                                                    {{$promotion->post->posts}}
                                                                @endif
                                                            </td>
                                                            <td>{{$promotion->authority}}</td>
                                                            <td>{{$promotion->level}}</td>
                                                            <td>{{$promotion->remarks}}</td>
                                                            {{-- <td>
                                                                <a href="{{route('promotion.edit', $promotion->id)}}"
                                                                    class="btn btn-sm btn-primary">
                                                                    <i class="far fa-edit" data-toggle="tooltip" data-placement="top"
                                                                        title="Edit"></i>
                                                                </a>
                                                                <a href="{{route('promotion.destroy', $promotion->id)}}" data-uuid="{{$promotion->id}}"
                                                                    data-name="{{$promotion->name}}"
                                                                    class="btn btn-sm btn-danger">
                                                                    <i class="fas fa-trash" data-toggle="tooltip"
                                                                    data-placement="top" title="Delete"></i></a>
                                                            </td> --}}
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan="100%" class="text-center">Currently there is no data.
                                                            </td>
                                                        </tr>
                                                    @endforelse
                
                                                    </tbody>
                                                </table>
                                                {{-- <div class="text-center">{{$qualifications->links()}}</div> --}}
                                            </div> 
                                    </div><!-- row main close -->

                                </div>
                            </div>
                        </div> 
                        <div class="anchor" id="leave"></div>
                        {{-- Leave --}}
                        <div class="card custom-card create-wrapper">
                            <div class="card-header level">
                            <h3 class="" style="float:left">Leave Details</h3>
                            {{-- <a href="{{route('leave.create', ['id' => $info->id])}}" class="btn btn-success" style="margin-bottom:5px;float:right">Add New <i class="fas fa-plus"></i></a> --}}
                            </div>
                            <div class="card-body">
                                <div class="contact-form">
                                    <div class="row"><!-- main row open-->
                                        <!-- opening of one field -->
                                        <div class="table-responsive">
                                                <table class="table table-bordered department-table">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">S.No.</th>
                                                        <th scope="col">Type of Leave</th>
                                                        <th scope="col">From Date</th>
                                                        <th scope="col">To Date</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @forelse($info->leave as $leave)
                
                                                        <tr>
                                                            <td>{{$loop->iteration}}</td>
                                                            <td>{{$leave->type_of_leave}}</td>
                                                            <td>{{$leave->from_date}}</td>
                                                            <td>{{$leave->to_date}}</td>
                                                            {{-- <td>
                                                                <a href="{{route('leave.edit', $leave->id)}}"
                                                                    class="btn btn-sm btn-primary">
                                                                    <i class="far fa-edit" data-toggle="tooltip" data-placement="top"
                                                                        title="Edit"></i>
                                                                </a>
                                                                <a href="{{route('leave.destroy', $leave->id)}}" data-uuid="{{$leave->id}}"
                                                                    data-name="{{$leave->name}}"
                                                                    class="btn btn-sm btn-danger">
                                                                    <i class="fas fa-trash" data-toggle="tooltip"
                                                                    data-placement="top" title="Delete"></i></a>
                                                            </td> --}}
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan="100%" class="text-center">Currently there is no data.
                                                            </td>
                                                        </tr>
                                                    @endforelse
                
                                                    </tbody>
                                                </table>
                                                {{-- <div class="text-center">{{$qualifications->links()}}</div> --}}
                                            </div> 
                                    </div><!-- row main close -->

                                </div>
                            </div>
                        </div> 
                        <div class="anchor" id="status"></div>
                        {{-- Status --}}
                        <div class="card custom-card create-wrapper">
                            <div class="card-header level">
                            <h3 class="" style="float:left">Status Details</h3>
                            {{-- <a href="{{route('status.create', ['id' => $info->id])}}" class="btn btn-success" style="margin-bottom:5px;float:right">Add New <i class="fas fa-plus"></i></a> --}}
                            </div>
                            <div class="card-body">
                                <div class="contact-form">
                                    <div class="row"><!-- main row open-->
                                        <!-- opening of one field -->
                                        <div class="table-responsive">
                                                <table class="table table-bordered department-table">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">S.No.</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Date</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @forelse($info->status as $status)
                
                                                        <tr>
                                                            <td>{{$loop->iteration}}</td>
                                                            <td>{{config('constants.status')[$status->status]}}</td>
                                                            <td>{{$status->date}}
                                                            {{-- <td>
                                                                <a href="{{route('status.edit', $status->id)}}"
                                                                    class="btn btn-sm btn-primary">
                                                                    <i class="far fa-edit" data-toggle="tooltip" data-placement="top"
                                                                        title="Edit"></i>
                                                                </a>
                                                                <a href="{{route('status.destroy', $status->id)}}" data-uuid="{{$status->id}}"
                                                                    data-name="{{$status->name}}"
                                                                    class="btn btn-sm btn-danger">
                                                                    <i class="fas fa-trash" data-toggle="tooltip"
                                                                    data-placement="top" title="Delete"></i></a>
                                                            </td> --}}
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan="100%" class="text-center">Currently there is no data.
                                                            </td>
                                                        </tr>
                                                    @endforelse
                
                                                    </tbody>
                                                </table>
                                                {{-- <div class="text-center">{{$qualifications->links()}}</div> --}}
                                            </div> 
                                    </div><!-- row main close -->

                                </div>
                            </div>
                        </div>
                        <div class="anchor" id="additional"></div>
                        {{-- Additional Information --}}
                        <div class="card custom-card create-wrapper">
                            <div class="card-header level">
                            <h3 class="" style="float:left">Additional Information</h3>
                            {{-- <a href="{{route('additional.create', ['id' => $info->id])}}" class="btn btn-success" style="margin-bottom:5px;float:right">Add New <i class="fas fa-plus"></i></a> --}}
                            </div>
                            <div class="card-body">
                                <div class="contact-form">
                                    <div class="row"><!-- main row open-->
                                        <!-- opening of one field -->
                                        <div class="table-responsive">
                                                <table class="table table-bordered department-table">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">S.No.</th>
                                                        <th scope="col">Appointment Date</th>
                                                        <th scope="col">Provident Fund No.</th>
                                                        <th scope="col">Sheet No.</th>
                                                        <th scope="col">CIT No.</th>
                                                        <th scope="col">Citizenship No.</th>
                                                        <th scope="col">Insurance No.</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @forelse($info->additionalinformation as $additional)
                
                                                        <tr>
                                                            <td>{{$loop->iteration}}</td>
                                                            <td>{{$additional->appointment_date}}</td>
                                                            <td>{{$additional->provident_fund_no}}</td>
                                                            <td>{{$additional->sheet_no}}</td>
                                                            <td>{{$additional->cit_no}}</td>
                                                            <td>{{$additional->citizenship_no}}</td>
                                                            <td>{{$additional->insurance_no}}</td>
                                                            {{-- <td>{{$additional->country_of_training}}</td> --}}
                                                            {{-- <td>
                                                                <a href="{{route('additional.edit', $additional->id)}}"
                                                                    class="btn btn-sm btn-primary">
                                                                    <i class="far fa-edit" data-toggle="tooltip" data-placement="top"
                                                                        title="Edit"></i>
                                                                </a>
                                                                <a href="{{route('additional.destroy', $additional->id)}}" data-uuid="{{$additional->id}}"
                                                                    data-name="{{$additional->name}}"
                                                                    class="btn btn-sm btn-danger">
                                                                    <i class="fas fa-trash" data-toggle="tooltip"
                                                                    data-placement="top" title="Delete"></i></a>
                                                            </td> --}}
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan="100%" class="text-center">Currently there is no data.
                                                            </td>
                                                        </tr>
                                                    @endforelse
                
                                                    </tbody>
                                                </table>
                                                {{-- <div class="text-center">{{$qualifications->links()}}</div> --}}
                                            </div> 
                                    </div><!-- row main close -->

                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
@section('scripts')
@endsection
