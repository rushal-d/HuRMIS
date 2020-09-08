@extends('layouts.app')
@section('styles')

@endsection
@section('content')
<section class="padding-block">
    <div class="container-fluid">
        {{ Form::open(['route' => ['additional.update', 'id' => $additional->id], 'method'=>'PATCH']) }}
        {{-- {!! Form::hidden('id', $qualification->id)!!}   --}}
            <div class="row">
                    <div class="col-lg-8"><!-- first column -->
                        <div class="card custom-card create-wrapper">
                            <div class="card-header">
                                <h3>Edit Additional Information</h3>
                            </div>
                            <div class="card-body">
                                    <div class="contact-form">
                                        <div class="row"><!-- main row open-->
                                            <!-- opening of one field -->
                                            {!! Form::label('appointment_date', 'Appointment Date: <span class="required-field"></span>', ['class' => 'col-xs-2 col-md-2'], false); !!}
                                            <div class="col-xs-10 col-md-10 form-group">
                                                {!! Form::text('appointment_date', $additional->appointment_date, ['class' => 'form-control flat', 'id' => 'nepali']) !!}
                                            </div>
                                            {!! Form::label('provident_fund_no', 'Provident Fund No.: <span class="required-field"></span>', ['class' => 'col-xs-2 col-md-2'], false); !!}
                                            <div class="col-xs-10 col-md-10 form-group">
                                                {!! Form::text('provident_fund_no', $additional->provident_fund_no, ['class' => 'form-control']) !!}
                                            </div>
                                            {!! Form::label('sheet_no', 'Sheet No.: <span class="required-field"></span>', ['class' => 'col-xs-2 col-md-2'], false); !!}
                                            <div class="col-xs-10 col-md-10 form-group">
                                                {!! Form::text('sheet_no', $additional->sheet_no, ['class' => 'form-control']) !!}
                                            </div>
                                            {!! Form::label('cit_no', 'Sheet No.: <span class="required-field"></span>', ['class' => 'col-xs-2 col-md-2'], false); !!}
                                            <div class="col-xs-10 col-md-10 form-group">
                                                {!! Form::text('cit_no', $additional->cit_no, ['class' => 'form-control']) !!}
                                            </div>
                                            {!! Form::label('citizenship_no', 'Sheet No.: <span class="required-field"></span>', ['class' => 'col-xs-2 col-md-2'], false); !!}
                                            <div class="col-xs-10 col-md-10 form-group">
                                                {!! Form::text('citizenship_no', $additional->citizenship_no, ['class' => 'form-control']) !!}
                                            </div>
                                            {!! Form::label('insurance_no', 'Sheet No.: <span class="required-field"></span>', ['class' => 'col-xs-2 col-md-2'], false); !!}
                                            <div class="col-xs-10 col-md-10 form-group">
                                                {!! Form::text('insurance_no', $additional->insurance_no, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>
                    
                                        <p class="text-right">
                                            <button class="btn custom-btn btn-success" type="submit">Update</button>
                                            <a href="{{URL::previous()}}" class="btn custom-btn btn-clear" type="submit">Cancel</a>
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

{{-- <script>
    $('.drop').selectize({
        plugins: ['remove_button'],    
    });
</script> --}}
<script>
    $('.flat').nepaliDatePicker();
</script>

    
@endsection