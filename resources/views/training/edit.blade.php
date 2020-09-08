@extends('layouts.app')
@section('styles')

@endsection
@section('content')
<section class="padding-block">
    <div class="container-fluid">
        {{ Form::open(['route' => ['training.update', 'id' => $training->id], 'method'=>'PATCH']) }}
        {{-- {!! Form::hidden('id', $qualification->id)!!}   --}}
            <div class="row">
                    <div class="col-lg-8"><!-- first column -->
                        <div class="card custom-card create-wrapper">
                            <div class="card-header">
                                <h3>Edit Training Information</h3>
                            </div>
                            <div class="card-body">
                                    <div class="contact-form">
                                        <div class="row"><!-- main row open-->
                                            <!-- opening of one field -->
                                            {!! Form::label('title', 'Title: <span class="required-field">*</span>', ['class' => 'col-xs-2 col-md-2'], false); !!}
                                            <div class="col-xs-10 col-md-10 form-group">
                                                {!! Form::text('title', $training->title, ['class' => 'form-control', 'data-validation' => 'required']) !!}
                                            </div>
                                            {!! Form::label('start_date', 'Start Date: <span class="required-field"></span>', ['class' => 'col-xs-2 col-md-2'], false); !!}
                                            <div class="col-xs-10 col-md-10 form-group">
                                                {!! Form::text('start_date', $training->start_date, ['class' => 'form-control flat_np']) !!}
                                            </div>
                                            {!! Form::label('end_date', 'End Date: <span class="required-field"></span>', ['class' => 'col-xs-2 col-md-2'], false); !!}
                                            <div class="col-xs-10 col-md-10 form-group">
                                                {!! Form::text('end_date', $training->end_date, ['class' => 'form-control flat_np']) !!}
                                            </div>
                                            {!! Form::label('start_date_en', 'Start Date(EN): <span class="required-field"></span>', ['class' => 'col-xs-2 col-md-2'], false); !!}
                                            <div class="col-xs-10 col-md-10 form-group">
                                                {!! Form::text('start_date_en', $training->start_date_en, ['class' => 'form-control flat_en']) !!}
                                            </div>
                                            {!! Form::label('end_date_en', 'End Date(EN): <span class="required-field"></span>', ['class' => 'col-xs-2 col-md-2'], false); !!}
                                            <div class="col-xs-10 col-md-10 form-group">
                                                {!! Form::text('end_date_en', $training->end_date_en, ['class' => 'form-control flat_en']) !!}
                                            </div>
                                            {!! Form::label('institution_name', 'Institution Name: <span class="required-field"></span>', ['class' => 'col-xs-2 col-md-2'], false); !!}
                                            <div class="col-xs-10 col-md-10 form-group">
                                                {!! Form::text('institution_name', $training->institution_name, ['class' => 'form-control drop', 'placeholder' => '']) !!}
                                            </div>
                                            {!! Form::label('subject', 'Subject: <span class="required-field"></span>', ['class' => 'col-xs-2 col-md-2'], false); !!}
                                            <div class="col-xs-10 col-md-10 form-group">
                                                {!! Form::text('subject', $training->subject, ['class' => 'form-control drop', 'placeholder' => '']) !!}
                                            </div>
                                            {!! Form::label('sponsor', 'Sponsor: <span class="required-field"></span>', ['class' => 'col-xs-2 col-md-2'], false); !!}
                                            <div class="col-xs-10 col-md-10 form-group">
                                                {!! Form::text('sponsor', $training->sponsor, ['class' => 'form-control drop', 'placeholder' => '']) !!}
                                            </div>
                                            {!! Form::label('country_of_training', 'Country of training: <span class="required-field"></span>', ['class' => 'col-xs-2 col-md-2'], false); !!}
                                            <div class="col-xs-10 col-md-10 form-group">
                                                {!! Form::text('country_of_training', $training->country_of_training, ['class' => 'form-control drop', 'placeholder' => '']) !!}
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
    $('.flat_np').nepaliDatePicker();
    $('.flat_en').flatpickr();
</script>
    
@endsection