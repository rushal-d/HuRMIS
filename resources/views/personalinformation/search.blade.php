@extends('layouts.app')
@section('styles')

@endsection
@section('content')
    <div class="padding-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                        {{ Form::open(['route' => 'personal.showByCouncil']) }}
                            <div class="card custom-card create-wrapper">
                                {{-- <div class="card-header">
                                    <h3>Add Personal Information</h3>
                                </div> --}}
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card-body">
                                            <div class="contact-form">
                                                <!-- opening of one field -->
                                                {!! Form::label('council', 'Council: <span class="required-field"> *</span>', ['class' => 'col-xs-4 col-md-4'], false); !!}
                                                <div class="col-xs-8 col-md-8 form-group">
                                                    {!! Form::select('council', $council, null, ['class' => 'form-control drop', 'placeholder' => 'Select a council']) !!}
                                                </div>
                                                {!! Form::label('council_number', 'Council No.: <span class="required-field"> *</span>', ['class' => 'col-xs-4 col-md-4'], false); !!}
                                                <div class="col-xs-8 col-md-8 form-group">
                                                    {!! Form::text('council_number', null, ['class' => 'form-control drop', 'placeholder' => 'Enter a council number']) !!}
                                                </div>   
                                                <p class="text-left" style="margin-left:20px">
                                                    <button class="btn custom-btn btn-success" type="submit">Search</button>
                                                    <a href="{{route('personal.index')}}" class="btn custom-btn btn-clear" type="submit">Cancel</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                {!! Form::close() !!}
                </div>
                <div class="col-lg-6">
                        {{ Form::open(['route' => 'personal.showByPin']) }}
                            <div class="card custom-card create-wrapper">
                                {{-- <div class="card-header">
                                    <h3>Add Personal Information</h3>
                                </div> --}}
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card-body">
                                            <div class="contact-form">
                                                <!-- opening of one field -->
                                                {!! Form::label('pin', 'PIS No.: <span class="required-field"> *</span>', ['class' => 'col-xs-4 col-md-4'], false); !!}
                                                <div class="col-xs-8 col-md-8 form-group">
                                                    {!! Form::text('pin', null, ['class' => 'form-control drop', 'placeholder' => 'Enter a pis number']) !!}
                                                </div>   
                                                <p class="text-left" style="margin-left:20px">
                                                    <button class="btn custom-btn btn-success" type="submit">Search</button>
                                                    <a href="{{route('personal.index')}}" class="btn custom-btn btn-clear" type="submit">Cancel</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

    <script>
        $('.drop').selectize();
    </script>

@endsection