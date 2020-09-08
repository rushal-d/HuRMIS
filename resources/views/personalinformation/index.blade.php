@extends('layouts.app')
@section('styles')
<style>
    table a{
        color: #000;
    }
    table a:hover{
        color: #000;
    }
</style>
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
                                    <div class="col-lg-12">
                                        <div class="add-new mb-3">
                                        <a href="{{route('personal.create')}}" class="btn btn-success">
                                                Add New <i class="fas fa-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                        
                                    <h3 class="d-md-none text-center btn custom-filter-button">Toggle Filter <i class="custom-filter-caret fas fa-caret-down"></i></h3>
                                    <div class="filter custom-filter-bar do-not-display-filter-bar-for-small-device col-md-12">
                                        {!! Form::open(['route' => 'personal.index', 'method' => 'GET']) !!}
                                        <div class="row">
                                            <div class="col-lg-3 form-group">
                                                <label>Pin</label>
                                                {!! Form::text('pin', $_GET['pin'] ?? null, ['class' => 'form-control', 'placeholder' => 'Search by pin']) !!}
                                            </div>
                                            <div class="col-lg-3 form-group">
                                                <label>Full Name</label>
                                                {!! Form::text('full_name', $_GET['full_name'] ?? null, ['class' => 'form-control', 'placeholder' => 'Search by name']) !!}
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
                                        {{-- <a href="{{route('personal.exportview', ['district' => request('district'),'status' => request('status'),'training' => request('training'),'province' => request('province'),'post' => request('post'),'location' => request('location'),'pin' => request('pin'), 'gender' => request('gender')])}}" class="btn custom-btn btn-warning" type="submit">Export
                                        </a> --}}
                                    </div>

                                </div>
                            </div>
                        <!-- filter ends -->
                        <div class="table-responsive">
                                <table class="table table-striped table-hover department-table">
                                        <thead>
                                        <tr>
                                            <th scope="col">S.No.</th>
                                            <th scope="col">Full Name (EN)</th>
                                            <th scope="col">ID</th>
                                            {{-- <th scope="col">Training</th> --}}
                                            <th scope="col">Current Post</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Temporary District</th>
                                            <th scope="col">Temporary Local Auth</th>
                                            <th scope="col">Province</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($personalinfos as $personalinfo)
                                            <tr>
                                                {{-- <th scope="row">{{ ($personalinfos->currentpage()-1) * $personalinfos->perpage() + $loop->index + 1 }}</th> --}}
                                                <td>{{$loop->iteration}}</td>
                                                <td>
                                                    <img width="50" height="50" src='{{(!empty($personalinfo->image)) ? asset("storage/cover_images/{$personalinfo->image}"):  asset("storage/cover_images/no.jpg") }}'>
                                                    <a href="{{route('personal.show', $personalinfo->id)}}">{{$personalinfo->full_name_en}}</a>
                                                </td>
                                                <td>{{$personalinfo->pin}}</td>
                                                {{-- <td>{{implode(', ', $personalinfo->training->pluck('title')->toArray())}}</td> --}}
                                                <td>{{$personalinfo->promotion->first()->post->posts ?? null}}</td>
                                                <td>{{$personalinfo->phone}}</td>
                                                <td>{{$personalinfo->temp_district->district_name ?? null}}</td>
                                                <td>{{$personalinfo->temp_local->mun_vdc_en ?? null}}</td>
                                                <td>{{$personalinfo->temporary_pradesh}}</td>  
                                                    @php
                                                        // dd($personalinfo->status);
                                                        $tempStatus = $personalinfo->status->first()->status ?? null;
                                                    @endphp
                                                        @if(!is_null($tempStatus))
                                                <td>{{config('constants.status')[$tempStatus]}}</td>
                                                        @else
                                                        <td></td>
                                                        @endif
                                                <td>
                                                    <a href="{{route('personal.show', $personalinfo->id)}}"
                                                       class="btn btn-sm btn-outline-info">
                                                        <i class="far fa-eye" data-toggle="tooltip" data-placement="top"
                                                        title="View"></i>
                                                    </a>
                                                    <a href="{{route('personal.edit', $personalinfo->id)}}"
                                                       class="btn btn-sm btn-primary">
                                                        <i class="far fa-edit" data-toggle="tooltip" data-placement="top"
                                                           title="Edit"></i>
                                                    </a>
                                                <a href="{{route('personal.destroy', $personalinfo->id)}}" data-uuid="{{$personalinfo->id}}"
                                                       data-name="{{$personalinfo->name}}"
                                                       class="btn btn-sm btn-danger">
                                                        <i class="fas fa-trash" data-toggle="tooltip"
                                                           data-placement="top" title="Delete"></i></a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="100%" class="text-center">Currently there is no data.
                                                </td>
                                            </tr>
                                        @endforelse
                                    
                                        </tbody>
                                    </table>
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