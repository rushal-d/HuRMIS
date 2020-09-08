@extends('layouts.app')
@section('styles')

@endsection

@section('content')
<section class="padding-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header level">
                            <h3 class="flex" style="float:left">{{$title}}</h3>
                            <h3 style="float:right">Total Number : {{$personalinfos->total()}}</h3>
                        </div>
                        <div class="card-body">
                            <!-- filter -->
                            <div class="filter">
                                <div class="row form-group">
                                    {{-- <div class="col-lg-12">
                                        <div class="add-new mb-3">
                                        <a href="{{route('personal.create')}}" class="btn btn-success">
                                                Add New <i class="fas fa-plus"></i>
                                            </a>
                                        </div>
                                    </div> --}}
                                        
                                    <h3 class="d-md-none text-center btn custom-filter-button">Toggle Filter <i class="custom-filter-caret fas fa-caret-down"></i></h3>
                                    <div class="filter custom-filter-bar do-not-display-filter-bar-for-small-device col-md-12">
                                        {!! Form::open(['route' => 'personal.report', 'method' => 'GET']) !!}
                                        <div class="row">
                                            <div class="col-lg-3 form-group">
                                                <label>Training</label>
                                                {!! Form::text('training', $_GET['training'] ?? null, ['class' => 'form-control', 'placeholder' => 'Search by training']) !!}
                                            </div>
                                            <div class="col-lg-3 form-group">
                                                <label>Current Institution</label>
                                                {!! Form::text('institution', $_GET['institution'] ?? null, ['class' => 'form-control', 'placeholder' => 'Search by institution']) !!}
                                            </div>
                                            <div class="col-lg-3 form-group">
                                                <label>Pin</label>
                                                {!! Form::text('pin', $_GET['pin'] ?? null, ['class' => 'form-control', 'placeholder' => 'Search by pin']) !!}
                                            </div>
                                            <div class="col-lg-3 form-group">
                                                <label>Gender</label>
                                                {!! Form::select('gender', $gender, $_GET['gender'] ?? null, ['class' => 'form-control search', 'placeholder' => 'Search by gender']) !!}
                                            </div>
                                            <div class="col-lg-3 form-group">
                                                <label>Current MUN/VDC</label>
                                                {!! Form::select('location', $mun, $_GET['location'] ?? null, ['class' => 'form-control search', 'placeholder' => 'Search by location']) !!}
                                            </div>
                                            <div class="col-lg-3 form-group">
                                                <label>Current District</label>
                                                {!! Form::select('district', $district, $_GET['district'] ?? null, ['class' => 'form-control search', 'placeholder' => 'Search by location']) !!}
                                            </div>
                                            <div class="col-lg-3 form-group">
                                                <label>Current Post</label>
                                                {!! Form::select('post', $post, $_GET['post'] ?? null, ['class' => 'form-control search', 'placeholder' => 'Search by post']) !!}
                                            </div>
                                            <div class="col-lg-3 form-group">
                                                <label>Province</label>
                                                {!! Form::select('province', $province, $_GET['province'] ?? null, ['class' => 'form-control search', 'placeholder' => 'Search by province']) !!}
                                            </div>
                                            <div class="col-lg-3 form-group">
                                                <label>Status</label>
                                                {!! Form::select('status', $status, $_GET['status'] ?? null, ['class' => 'form-control search', 'placeholder' => 'Search by status']) !!}
                                            </div>
                                            <div class="col-lg-3 form-group">
                                                <label>Experience</label>
                                                {!! Form::select('experience', $experience, $_GET['experience'] ?? null, ['class' => 'form-control search', 'placeholder' => 'Search by experience']) !!}
                                            </div>
                                            <div class="col-lg-2">
                                                <p class="mt-4">
                                                    <button class="btn custom-btn btn-primary" type="submit">Search
                                                    </button>
                                                    <button class="btn custom-btn btn-danger" type="reset" id="reset">Reset
                                                    </button>
                                                </p>
                                            </div><!--  -->
                                        </div>
                                        {!! Form::close() !!}
                                        <a href="{{route('personal.exportview', ['institution' => request('institution'), 'experience' => request('experience'), 'district' => request('district'),'status' => request('status'),'training' => request('training'),'province' => request('province'),'post' => request('post'),'location' => request('location'),'pin' => request('pin'), 'gender' => request('gender')])}}" class="btn custom-btn btn-warning" type="submit">Export
                                        </a>
                                    </div>

                                </div>
                            </div>
                        <!-- filter ends -->
                        <div class="table-responsive">
                               @include('personalinformation.table', $personalinfos)
                                <div class="text-center">{!!$personalinfos->appends(request()->input())->links()!!}</div>
                            </div>  
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection
@section('scripts')  
        <script>
                $('#reset').click(function () {
                    $('input').val('');
                    // $('#department-form').submit();
                });

                $('.search').selectize({

                });

        </script>
</section>

@endsection