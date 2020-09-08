@extends('layouts.app')
@section('styles')
<style>
    div.anchor{
    display: block;
    position: relative;
    top: -100px;
    visibility: hidden;
    }

    body {
    background-color: #f7f8f9;
    }

    .card {
        background-color: #ffffff;
        border: 1px solid rgba(0, 34, 51, 0.1);
        box-shadow: 2px 4px 10px 0 rgba(0, 34, 51, 0.05), 2px 4px 10px 0 rgba(0, 34, 51, 0.05);
        border-radius: 0.15rem;
    }

    /* Tabs Card */

    .tab-card {
    border:1px solid #eee;
    }

    .tab-card-header {
    background:none;
    }
    /* Default mode */
    .tab-card-header > .nav-tabs {
    border: none;
    margin: 0px;
    }
    .tab-card-header > .nav-tabs > li {
    margin-right: 2px;
    }
    .tab-card-header > .nav-tabs > li > a {
    border: 0;
    border-bottom:2px solid transparent;
    margin-right: 0;
    color: #737373;
    padding: 2px 15px;
    }

    .tab-card-header > .nav-tabs > li > a.show {
        border-bottom:2px solid #007bff;
        color: #007bff;
    }
    .tab-card-header > .nav-tabs > li > a:hover {
        color: #007bff;
    }

    .nav-tabs .nav-link.active:focus{
        background: #fff;
        border-color: blue;
        border-bottom-color: blue;
    }

    .card-header .nav-tabs .nav-link.active{
        color: blue;
    }

    .tab-card-header > .tab-content {
    padding-bottom: 0;
    }
</style>

@endsection
@section('content')
    <section class="padding-block">
        <div class="container-fluid">
            <form id="contact" method="post" class="form create" role="form">
                <div class="row">
                    <div class="col-lg-12"><!-- first column -->
                        @include('personalinformation.personalinfo')
                        <div class="row">
                        <div class="list" style="">
                            <a href="{{route('personal.show', ['id' => $info->id])}}" class="btn btn-primary" style="margin-bottom:5px;margin-left:15px;">Qualifications</a>
                        </div>
                        <div class="list" style="">
                            <a href="{{route('training.show', ['id' => $info->id])}}" class="btn btn-primary" style="margin-bottom:5px;margin-left:5px;">Trainings</a>
                        </div>
                        <div class="list" style="">
                            <a href="{{route('transfer.show', ['id' => $info->id])}}" class="btn btn-primary" style="margin-bottom:5px;margin-left:5px;">Transfers</a>
                        </div>
                        <div class="list" style="">
                            <a href="{{route('promotion.show', ['id' => $info->id])}}" class="btn btn-primary" style="margin-bottom:5px;margin-left:5px;">Promotions</a>
                        </div>
                        <div class="list" style="">
                            <a href="{{route('leave.show', ['id' => $info->id])}}" class="btn btn-primary" style="margin-bottom:5px;margin-left:5px;">Leave</a>
                        </div>
                        <div class="list" style="">
                            <a href="{{route('status.show', ['id' => $info->id])}}" class="btn btn-primary" style="margin-bottom:5px;margin-left:5px;">Status</a>
                        </div>
                        <div class="list" style="">
                            <a href="{{route('additional.show', ['id' => $info->id])}}" class="btn btn-primary" style="margin-bottom:5px;margin-left:5px;">Additional Information</a>
                        </div>
                        </div>
                        {{-- Status --}}
                        <div class="card custom-card create-wrapper">
                                <div class="card-header level">
                                <h3 class="" style="float:left">Status Details</h3>
                                <a href="{{route('status.create', ['id' => $info->id])}}" class="btn btn-success" style="margin-bottom:5px;float:right">Add New <i class="fas fa-plus"></i></a>
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
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @forelse($info->status as $status)
                    
                                                            <tr>
                                                                <td>{{$loop->iteration}}</td>
                                                                <td>{{config('constants.status')[$status->status]}}</td>
                                                                <td>{{$status->date}}
                                                                <td>
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
