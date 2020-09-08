@extends('layouts.app')
@section('styles')

@endsection
@section('content')
<section class="padding-block">
    <div class="container-fluid">
        {{ Form::open(['route' => ['qualification.update', 'id' => $qualification->id], 'method'=>'PATCH']) }}
        {{-- {!! Form::hidden('id', $qualification->id)!!}   --}}
            <div class="row">
                    <div class="col-lg-8"><!-- first column -->
                        <div class="card custom-card create-wrapper">
                            <div class="card-header">
                                <h3>Edit Educational Information</h3>
                            </div>
                            <div class="card-body">
                                    <div class="contact-form">
                                        <div class="row"><!-- main row open-->
                                            <!-- opening of one field -->
                                            {!! Form::label('degree', 'Degree: <span class="required-field">*</span>', ['class' => 'col-xs-2 col-md-2'], false); !!}
                                            <div class="col-xs-10 col-md-10 form-group">
                                                {!! Form::text('degree', $qualification->degree, ['class' => 'form-control', 'data-validation' => 'required']) !!}
                                            </div>
                                            {!! Form::label('year', 'Year: <span class="required-field"></span>', ['class' => 'col-xs-2 col-md-2'], false); !!}
                                            <div class="col-xs-10 col-md-10 form-group">
                                                {!! Form::text('year', $qualification->year, ['class' => 'form-control']) !!}
                                            </div>
                                            {!! Form::label('grade', 'Grade: <span class="required-field"></span>', ['class' => 'col-xs-2 col-md-2'], false); !!}
                                            <div class="col-xs-10 col-md-10 form-group">
                                                {!! Form::text('grade', $qualification->grade, ['class' => 'form-control']) !!}
                                            </div>
                                            {!! Form::label('major_subject', 'Major Subject: <span class="required-field"></span>', ['class' => 'col-xs-2 col-md-2'], false); !!}
                                            <div class="col-xs-10 col-md-10 form-group">
                                                {!! Form::text('major_subject', $qualification->major_subject, ['class' => 'form-control drop', 'placeholder' => 'Select religion']) !!}
                                            </div>
                                            {!! Form::label('Institution', 'Institution: <span class="required-field"></span>', ['class' => 'col-xs-2 col-md-2'], false); !!}
                                            <div class="col-xs-10 col-md-10 form-group">
                                                {!! Form::text('institution', $qualification->institution, ['class' => 'form-control drop', 'placeholder' => 'Select religion']) !!}
                                            </div>
                                            {!! Form::label('sponsor', 'Sponsor: <span class="required-field"></span>', ['class' => 'col-xs-2 col-md-2'], false); !!}
                                            <div class="col-xs-10 col-md-10 form-group">
                                                {!! Form::text('sponsor', $qualification->sponsor, ['class' => 'form-control drop', 'placeholder' => 'Select religion']) !!}
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

    
@endsection