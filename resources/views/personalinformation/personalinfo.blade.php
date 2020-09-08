<div class="card custom-card create-wrapper">
    <div class="card-header level">
        <a href="{{URL::previous()}}" class="btn custom-btn btn-danger" style="float:left;margin-bottom:5px;">Go Back</a>                               {{-- {{dd($info->religion)}} --}}
        <h3 class="flex">{{$info->full_name_en}}'s Personal Information</h3>
    </div>
    <div class="card-body">
        <div class="contact-form">
            <div class="row"><!-- main row open-->
                <!-- opening of one field -->
                <div class="col-lg-2" style="height:170px">
                    {{-- <label class="col-xs-4 col-md-4">ID</label> --}}
                    <span class="col-xs-8 col-md-8 form-group">

                                            <?php
                        $img = $info->image;
                        if(empty($img)){
                            $img = 'no.jpg';
                        }
                        ?>
                                            <img width="200"  src='{{asset("storage/cover_images/{$img}")}}'>
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
                                <label class="col-xs-4 col-md-4">Mobile</label>
                                <span class="col-xs-8 col-md-8 form-group">
                                            <p>{{$info->mobile}}</p>
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
                                                    <p> {{ $info->perm_district->district_name}}</p>
                                                </span>
                                </div>
                            </div>
                        @endif
                        @if($info->permanent_pradesh != null)
                            <div class="col-lg-4">
                                <div class="row">
                                    <label class="col-xs-4 col-md-4">Perm. Pradesh</label>
                                    <span class="col-xs-8 col-md-8 form-group">
                                                    <p>{{$info->permanent_pradesh}}</p>
                                                </span>
                                </div>
                            </div>
                        @endif
                        @if($info->temporary_pradesh != null)
                            <div class="col-lg-4">
                                <div class="row">
                                    <label class="col-xs-4 col-md-4">Temp. Pradesh</label>
                                    <span class="col-xs-8 col-md-8 form-group">
                                                    <p>{{$info->temporary_pradesh}}</p>
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
                    <div class="row">
                        <div class="col-md-4">
                            @if(!empty($info->council))
                                <hr>
                                <p><b>Council Information</b></p>
                                @foreach(\Illuminate\Support\Facades\Config::get('constants.council') as $key=>$value)
                                    {{ ($key == $info->council ) ? $value : '' }}
                                @endforeach
                                : {{$info->council_number}}
                            @endif
                        </div>
                    </div>
                </div>
            </div><!-- row main close -->



        </div>
    </div>
</div>