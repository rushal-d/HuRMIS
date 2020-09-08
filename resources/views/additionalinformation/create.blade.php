@extends('layouts.app')
@section('styles')

@endsection

@section('content')
<section class="padding-block">
    <div class="container-fluid">

        {{ Form::open(['route' => 'additional.store']) }}
        {!! Form::hidden('personal_id', $personal->id)!!}

            <div class="row">
                    <div class="col-lg-12"><!-- first column -->
                        <div class="card custom-card create-wrapper">
                            <div class="card-header">
                                <h3>Additional Information</h3>
                            </div>
                            <div class="card-body">
                                <div class="contact-form">
                                    <div class="row" style="border: 1px solid #000;padding: 10px;margin-bottom:5px"><!-- main row open-->
                                        <!-- opening of one field -->
                                        <div class="col-lg-4">
                                            <div class="row">
                                                {!! Form::label('appointment_date', 'Appointment Date: <span class="required-field"></span>', ['class' => 'col-xs-4 col-md-4'], false); !!}
                                                <div class="col-xs-8 col-md-8 form-group">
                                                    {!! Form::text('appointment_date', null, ['class' => 'form-control flat_np', 'placeholder' => 'Pick a Date', 'id' => 'date_np']) !!}
                                                </div>
                                            </div>    
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row">
                                                {!! Form::label('appointment_date_en', 'Appointment Date(EN): <span class="required-field"></span>', ['class' => 'col-xs-4 col-md-4'], false); !!}
                                                <div class="col-xs-8 col-md-8 form-group">
                                                    {!! Form::text('appointment_date_en', null, ['class' => 'form-control flat_en', 'placeholder' => 'Pick a Date', 'id' => 'date_en']) !!}
                                                </div>
                                            </div>    
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row">
                                                {!! Form::label('provident_fund_no', 'Provident Fund No.: <span class="required-field"></span>', ['class' => 'col-xs-4 col-md-4'], false); !!}
                                                <div class="col-xs-8 col-md-8 form-group">
                                                    {!! Form::text('provident_fund_no', null, ['class' => 'form-control']) !!}
                                                </div>
                                            </div>    
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row">
                                                {!! Form::label('sheet_no', 'Sheet No.: <span class="required-field"></span>', ['class' => 'col-xs-4 col-md-4'], false); !!}
                                                <div class="col-xs-8 col-md-8 form-group">
                                                    {!! Form::text('sheet_no', null, ['class' => 'form-control']) !!}
                                                </div>
                                            </div>    
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row">
                                                {!! Form::label('cit_no', 'CIT No.: <span class="required-field"></span>', ['class' => 'col-xs-4 col-md-4'], false); !!}
                                                <div class="col-xs-8 col-md-8 form-group">
                                                    {!! Form::text('cit_no', null, ['class' => 'form-control']) !!}
                                                </div>
                                            </div>    
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row">
                                                {!! Form::label('citizenship_no', 'Citizenship No.: <span class="required-field"></span>', ['class' => 'col-xs-4 col-md-4'], false); !!}
                                                <div class="col-xs-8 col-md-8 form-group">
                                                    {!! Form::text('citizenship_no', null, ['class' => 'form-control']) !!}
                                                </div>
                                            </div>    
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row">
                                                {!! Form::label('insurance_no', 'Insurance No.: <span class="required-field"></span>', ['class' => 'col-xs-4 col-md-4'], false); !!}
                                                <div class="col-xs-8 col-md-8 form-group">
                                                    {!! Form::text('insurance_no', null, ['class' => 'form-control']) !!}
                                                </div>
                                            </div>    
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row">
                                                {!! Form::label('remarks', 'Remarks: <span class="required-field"></span>', ['class' => 'col-xs-4 col-md-4'], false); !!}
                                                <div class="col-xs-8 col-md-8 form-group">
                                                    {!! Form::text('remarks', null, ['class' => 'form-control']) !!}
                                                </div>
                                            </div>    
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row">
                                                {!! Form::label('Notes', 'Notes: <span class="required-field"></span>', ['class' => 'col-xs-4 col-md-4'], false); !!}
                                                <div class="col-xs-8 col-md-8 form-group">
                                                    {!! Form::text('notes', null, ['class' => 'form-control']) !!}
                                                </div>
                                            </div>    
                                        </div>
                                    </div>
                                    <p class="text-right">
                                        <button class="btn custom-btn btn-success" type="submit">Create</button>
                                    <a href="{{URL::previous()}}" class="btn custom-btn btn-clear" type="submit">Cancel</a>
                                    </p>
                                </div>
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
        $('.flat_np').nepaliDatePicker();
        $('.flat_en').flatpickr();

    </script>
@endsection