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
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
@section('scripts')
@endsection
