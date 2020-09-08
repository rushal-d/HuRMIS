@extends('layouts.app')
@section('styles')
<style>
    .box{
        background-color:aliceblue;
        padding: 45px;
        text-align: center;
        color: black;
        margin-bottom: 30px;
    }
    .box:hover{
        color: black;
    }
    .icon{
        font-size: 40px;
    }
    p{
        font-size: 20px;
    }
</style>
@endsection
@section('content')
<div class="padding-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <a href="{{route('personal.index')}}">
                    <div class="box">
                        <div class="icon"><i class="fas fa-users"></i></div>
                        <p>View Employees</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="{{route('personal.report')}}">
                    <div class="box">
                        <div class="icon"><i class="fas fa-file-invoice"></i></div>
                        <p>Generate Report</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="{{route('personal.search')}}">
                    <div class="box">
                        <div class="icon"><i class="fas fa-user-cog"></i></div>
                        <p>Search People</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="{{route('personal.index')}}">
                    <div class="box">
                        <div class="icon"><i class="fas fa-search"></i></div>
                        <p>Search by Pin/Name</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="{{route('personal.create')}}">
                    <div class="box">
                        <div class="icon"><i class="fas fa-user-plus"></i></div>
                        <p>Add New Employee</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection