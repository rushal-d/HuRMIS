@extends('layouts.app')
@section('styles')

@endsection
@section('content')
<section class="padding-block">
    <div class="container-fluid">
        {{ Form::open(['route' => ['leave.update', 'id' => $leave->id], 'method'=>'PATCH']) }}
        {{-- {!! Form::hidden('id', $qualification->id)!!}   --}}
            <div class="row">
                    <div class="col-lg-8"><!-- first column -->
                        <div class="card custom-card create-wrapper">
                            <div class="card-header">
                                <h3>Edit Leave Information</h3>
                            </div>
                            <div class="card-body">
                                    <div class="contact-form">
                                        <div class="row"><!-- main row open-->
                                            <!-- opening of one field -->
                                            {!! Form::label('type_of_leave', 'Type of Leave: <span class="required-field"></span>', ['class' => 'col-xs-2 col-md-2'], false); !!}
                                            <div class="col-xs-10 col-md-10 form-group">
                                                {!! Form::text('type_of_leave', $leave->type_of_leave, ['class' => 'form-control']) !!}
                                            </div>
                                            {!! Form::label('from_date', 'From Date: <span class="required-field"></span>', ['class' => 'col-xs-2 col-md-2'], false); !!}
                                            <div class="col-xs-10 col-md-10 form-group">
                                                {!! Form::text('from_date', $leave->from_date, ['class' => 'form-control flat']) !!}
                                            </div>
                                            {!! Form::label('to_date', 'To Date: <span class="required-field"></span>', ['class' => 'col-xs-2 col-md-2'], false); !!}
                                            <div class="col-xs-10 col-md-10 form-group">
                                                {!! Form::text('to_date', $leave->to_date, ['class' => 'form-control flat']) !!}
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