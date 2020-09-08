@extends('layouts.app')
@section('styles')
<style>
    .box{
        background-color:aliceblue;
        padding: 80px;
        text-align: center;
        color: black;
        margin-bottom: 30px;
    }
    .box:hover{
        color: black;
    }   
</style>
@endsection
@section('content')
<div class="padding-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <a href="{{route('personal.report')}}">
                    <div class="box">
                        <p>Generate all the reports</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a href="{{route('personal.searchbytraining')}}">
                    <div class="box">
                        <p>Search by Training</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a href="{{route('personal.searchbyinstitution')}}">
                    <div class="box">
                        <p>Search by institution</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a href="{{route('personal.searchbymun')}}">
                    <div class="box">
                        <p>Search by MUN/VDC</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a href="{{route('personal.searchbygender')}}">
                    <div class="box">
                        <p>Search by Gender</p>
                    </div>
                </a>
            </div>
           
            <div class="col-lg-3">
                <a href="{{route('personal.searchbydistrict')}}">
                    <div class="box">
                        <p>Search by Current District</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a href="{{route('personal.searchbypost')}}">
                    <div class="box">
                        <p>Search by Current Post</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a href="{{route('personal.searchbyprovince')}}">
                    <div class="box">
                        <p>Search by Province</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a href="{{route('personal.searchbystatus')}}">
                    <div class="box">
                        <p>Search by Status</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a href="{{route('personal.searchbyexperience')}}">
                    <div class="box">
                        <p>Search by Experience</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection