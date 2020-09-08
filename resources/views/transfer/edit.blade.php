@extends('layouts.app')
@section('styles')

@endsection
@section('content')
<section class="padding-block">
    <div class="container-fluid">
        {{ Form::open(['route' => ['transfer.update', 'id' => $transfer->id], 'method'=>'PATCH']) }}
        {{-- {!! Form::hidden('id', $qualification->id)!!}   --}}
            <div class="row">
                    <div class="col-lg-8"><!-- first column -->
                        <div class="card custom-card create-wrapper">
                            <div class="card-header">
                                <h3>Edit Transfer Information</h3>
                            </div>
                            <div class="card-body">
                                    <div class="contact-form">
                                        <div class="row"><!-- main row open-->
                                            <!-- opening of one field -->
                                            {!! Form::label('start_date', 'Start Date: <span class="required-field"></span>', ['class' => 'col-xs-2 col-md-2'], false); !!}
                                            <div class="col-xs-10 col-md-10 form-group">
                                                {!! Form::text('start_date', $transfer->start_date, ['class' => 'form-control flat']) !!}
                                            </div>
                                            {!! Form::label('end_date', 'End Date: <span class="required-field"></span>', ['class' => 'col-xs-2 col-md-2'], false); !!}
                                            <div class="col-xs-10 col-md-10 form-group">
                                                {!! Form::text('end_date', $transfer->end_date, ['class' => 'form-control flat']) !!}
                                            </div>
                                            {!! Form::label('institution_transferedto', 'Institution Transfered to: <span class="required-field"></span>', ['class' => 'col-xs-2 col-md-2'], false); !!}
                                            <div class="col-xs-10 col-md-10 form-group">
                                                {!! Form::text('institution_transferedto', $transfer->institution_transferedto, ['class' => 'form-control']) !!}
                                            </div>
                                            {!! Form::label('post', 'Post: <span class="required-field"></span>', ['class' => 'col-xs-2 col-md-2'], false); !!}
                                            <div class="col-xs-10 col-md-10 form-group">
                                                {!! Form::select('post', $post, $transfer->post_id, ['class' => 'form-control drop', 'placeholder' => 'Select a Post']) !!}
                                            </div>
                                            {!! Form::label('authority', 'Authority: <span class="required-field"></span>', ['class' => 'col-xs-2 col-md-2'], false); !!}
                                            <div class="col-xs-10 col-md-10 form-group">
                                                {!! Form::text('authority', $transfer->authority, ['class' => 'form-control', 'placeholder' => 'Select religion']) !!}
                                            </div>
                                            {!! Form::label('level', 'Level: <span class="required-field"></span>', ['class' => 'col-xs-2 col-md-2'], false); !!}
                                            <div class="col-xs-10 col-md-10 form-group">
                                                {!! Form::text('level', $transfer->level, ['class' => 'form-control', 'placeholder' => 'Select religion']) !!}
                                            </div>
                                            {!! Form::label('remarks', 'Remarks: <span class="required-field"></span>', ['class' => 'col-xs-2 col-md-2'], false); !!}
                                            <div class="col-xs-10 col-md-10 form-group">
                                                {!! Form::text('remarks', $transfer->remarks, ['class' => 'form-control', 'placeholder' => 'Select religion']) !!}
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

<script>
    $('.drop').selectize({

    });

    $('.flat').nepaliDatePicker();

</script>

    
@endsection