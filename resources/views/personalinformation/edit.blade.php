@extends('layouts.app')
@section('styles')

@endsection
@section('content')
<section class="padding-block">
    <div class="container-fluid">
        {{ Form::open(['route' => ['personal.update', 'id' => $personalinfo->id], 'method'=>'PATCH']) }}
            <div class="row">
                    <div class="col-lg-10"><!-- first column -->
                        <div class="card custom-card create-wrapper">
                            <div class="card-header">
                                <h3>Edit Personal Information</h3>
                            </div>
                            <div class="card-body">
                                    <div class="contact-form">
                                        <div class="row"><!-- main row open-->
                                            <!-- opening of one field -->
                                            <div class="col-lg-6">
                                                <div class="row">
                                            {!! Form::label('name_en', 'Full Name (English): <span class="required-field"> *</span>', ['class' => 'col-xs-4 col-md-4'], false); !!}
                                            <div class="col-xs-8 col-md-8 form-group">
                                                {!! Form::text('full_name_en', $personalinfo->full_name_en, ['class' => 'form-control', 'data-validation' => 'required']) !!}
                                            </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                    <div class="row">
                                            {!! Form::label('name_np', 'Full Name (Nepali): <span class="required-field"></span>', ['class' => 'col-xs-4 col-md-4'], false); !!}
                                            <div class="col-xs-8 col-md-8 form-group">
                                                {!! Form::text('full_name_np', $personalinfo->full_name_np, ['class' => 'form-control']) !!}
                                            </div>
                                                    </div>
                                            </div>
                                            {!! Form::label('english_date', 'DOB English Date: <span class="required-field"></span>', ['class' => 'col-xs-2 col-md-2'], false); !!}
                                            <div class="col-xs-10 col-md-10 form-group">
                                                {!! Form::date('dob_en', $personalinfo->dob_en, ['class' => 'form-control date']) !!}
                                            </div>
                                            {!! Form::label('dob_np', 'DOB Nepali Date: <span class="required-field"></span>', ['class' => 'col-xs-2 col-md-2'], false); !!}
                                            <div class="col-xs-10 col-md-10 form-group">
                                                {!! Form::text('dob_np', $personalinfo->dob_np, ['class' => 'form-control nepali']) !!}
                                            </div>
                                            {!! Form::label('pin', 'PIN: <span class="required-field"></span>', ['class' => 'col-xs-2 col-md-2'], false); !!}
                                            <div class="col-xs-10 col-md-10 form-group">
                                                {!! Form::text('pin', $personalinfo->pin, ['class' => 'form-control']) !!}
                                            </div>
                                            {!! Form::label('gender', 'Gender: <span class="required-field"></span>', ['class' => 'col-xs-2 col-md-2'], false); !!}
                                            <div class="col-xs-10 col-md-10 form-group">
                                                {!! Form::select('gender', $gender, $personalinfo->gender, ['class' => 'form-control drop', 'placeholder' => 'Pick a Gender']) !!}
                                            </div>
                                            {!! Form::label('religion', 'Religion: <span class="required-field"></span>', ['class' => 'col-xs-2 col-md-2'], false); !!}
                                            <div class="col-xs-10 col-md-10 form-group">
                                                {!! Form::select('religion', $religion, $personalinfo->religion, ['class' => 'form-control drop', 'placeholder' => 'Select religion']) !!}
                                            </div>
                                            {!! Form::label('group', 'Group: <span class="required-field"></span>', ['class' => 'col-xs-2 col-md-2'], false); !!}
                                            <div class="col-xs-10 col-md-10 form-group">
                                                {!! Form::select('group', $group, $personalinfo->group, ['class' => 'form-control drop', 'placeholder' => 'Select group']) !!}
                                            </div>
                                            {!! Form::label('email', 'Email: <span class="required-field"></span>', ['class' => 'col-xs-2 col-md-2'], false); !!}
                                            <div class="col-xs-10 col-md-10 form-group">
                                                {!! Form::text('email', $personalinfo->email, ['class' => 'form-control']) !!}
                                            </div>
                                            {!! Form::label('phone', 'Phone: <span class="required-field"></span>', ['class' => 'col-xs-2 col-md-2'], false); !!}
                                            <div class="col-xs-10 col-md-10 form-group">
                                                {!! Form::text('phone', $personalinfo->phone, ['class' => 'form-control']) !!}
                                            </div>
                                            {!! Form::label('mobile', 'Mobile: <span class="required-field"></span>', ['class' => 'col-xs-2 col-md-2'], false); !!}
                                            <div class="col-xs-10 col-md-10 form-group">
                                                {!! Form::text('mobile', $personalinfo->mobile, ['class' => 'form-control']) !!}
                                            </div>
                                            {!! Form::label('marital', 'Marital Status: <span class="required-field"></span>', ['class' => 'col-xs-2 col-md-2'], false); !!}
                                            <div class="col-xs-10 col-md-10 form-group">
                                                {!! Form::text('marital_status', $personalinfo->marital_status, ['class' => 'form-control']) !!}
                                            </div>
                                            {!! Form::label('temporary', 'Temporary Address: <span class="required-field"></span>', ['class' => 'col-xs-3 col-md-3'], false); !!}
                                        <div class="row" style="margin-left:30px;">
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-xs-2 col-md-2 form-group">
                                                        {!! Form::select('temporary_pradesh', $province, $personalinfo->temporary_pradesh, ['class' => 'form-control drop', 'placeholder' => 'Pradesh']) !!}
                                                    </div>
                                                    <div class="col-xs-2 col-md-2 form-group">
                                                        {!! Form::select('temporary_district', $district, $personalinfo->temporary_district, ['class' => 'form-control drop', 'placeholder' => 'District']) !!}
                                                    </div>
                                                    <div class="col-xs-3 col-md-3 form-group">
                                                        {!! Form::select('temporary_local_auth', $local_auth, $personalinfo->temporary_local_auth, ['class' => 'form-control drop', 'placeholder' => 'Local Auth']) !!}
                                                    </div>
                                                    <div class="col-xs-2 col-md-2 form-group">
                                                        {!! Form::text('temporary_ward', $personalinfo->temporary_ward, ['class' => 'form-control', 'placeholder' => 'Ward No.']) !!}
                                                    </div>
                                                    <div class="col-xs-2 col-md-2 form-group">
                                                        {!! Form::text('temporary_full_address', $personalinfo->temporary_full_address, ['class' => 'form-control', 'placeholder' => 'Full Address']) !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {!! Form::label('permanent', 'Permanent Address: <span class="required-field"></span>', ['class' => 'col-xs-3 col-md-3'], false); !!}
                                        <div class="row" style="margin-left:30px;">
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-xs-2 col-md-2 form-group">
                                                        {!! Form::select('permanent_pradesh', $province, $personalinfo->permanent_pradesh, ['class' => 'form-control drop', 'placeholder' => 'Pradesh']) !!}
                                                    </div>
                                                    <div class="col-xs-2 col-md-2 form-group">
                                                        {!! Form::select('permanent_district', $district, $personalinfo->permanent_district, ['class' => 'form-control drop', 'placeholder' => 'District']) !!}
                                                    </div>
                                                    <div class="col-xs-3 col-md-3 form-group">
                                                        {!! Form::select('permanent_local_auth', $local_auth, $personalinfo->permanent_local_auth, ['class' => 'form-control drop', 'placeholder' => 'Local Auth']) !!}
                                                    </div>
                                                    <div class="col-xs-2 col-md-2 form-group">
                                                        {!! Form::text('permanent_ward', $personalinfo->permanent_ward, ['class' => 'form-control', 'placeholder' => 'Ward No.']) !!}
                                                    </div>
                                                    <div class="col-xs-2 col-md-2 form-group">
                                                        {!! Form::text('permanent_full_address', $personalinfo->permanent_full_address, ['class' => 'form-control', 'placeholder' => 'Full Address']) !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-right">
                                        <button class="btn custom-btn btn-success" type="submit">Update</button>
                                        <a href="{{route('personal.index')}}" class="btn custom-btn btn-clear" type="submit">Cancel</a>
                                    </p>
                                    </div>
                                </div>
                        </div>
                
                    </div>
        {!! Form::close() !!}
    </div>
</section>

@endsection

@section('scripts')

<script>
    $('.drop').selectize({
        plugins: ['remove_button'],    
    });
    $('.nepali').nepaliDatePicker();
    $('.date').flatpickr();
</script>

    
@endsection