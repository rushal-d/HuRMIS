@extends('layouts.app')
@section('styles')

@endsection
@section('content')
<section class="padding-block">
    <div class="container-fluid">
        {{ Form::open(['route' => ['promotion.update', 'id' => $promotion->id], 'method'=>'PATCH']) }}
        {{-- {!! Form::hidden('id', $qualification->id)!!}   --}}
            <div class="row">
                    <div class="col-lg-8"><!-- first column -->
                        <div class="card custom-card create-wrapper">
                            <div class="card-header">
                                <h3>Edit Promotion Information</h3>
                            </div>
                            <div class="card-body">
                                    <div class="contact-form">
                                        <div class="row"><!-- main row open-->
                                            <!-- opening of one field -->
                                            {!! Form::label('date_of_effect', 'Date of Effect: <span class="required-field"></span>', ['class' => 'col-xs-2 col-md-2'], false); !!}
                                            <div class="col-xs-10 col-md-10 form-group">
                                                {!! Form::text('date_of_effect', $promotion->date_of_effect, ['class' => 'form-control flat']) !!}
                                            </div>
                                            {!! Form::label('decision_date', 'Decision Date: <span class="required-field"></span>', ['class' => 'col-xs-2 col-md-2'], false); !!}
                                            <div class="col-xs-10 col-md-10 form-group">
                                                {!! Form::text('decision_date', $promotion->decision_date, ['class' => 'form-control flat']) !!}
                                            </div>
                                            {!! Form::label('post', 'Post: <span class="required-field"></span>', ['class' => 'col-xs-2 col-md-2'], false); !!}
                                            <div class="col-xs-10 col-md-10 form-group">
                                                {!! Form::select('post', $post, $promotion->post_id, ['class' => 'form-control drop']) !!}
                                            </div>
                                            {!! Form::label('authority', 'Authority: <span class="required-field"></span>', ['class' => 'col-xs-2 col-md-2'], false); !!}
                                            <div class="col-xs-10 col-md-10 form-group">
                                                {!! Form::text('authority', $promotion->authority, ['class' => 'form-control drop', 'placeholder' => 'Select religion']) !!}
                                            </div>
                                            {!! Form::label('level', 'Level: <span class="required-field"></span>', ['class' => 'col-xs-2 col-md-2'], false); !!}
                                            <div class="col-xs-10 col-md-10 form-group">
                                                {!! Form::text('level', $promotion->level, ['class' => 'form-control drop', 'placeholder' => 'Select religion']) !!}
                                            </div>
                                            {!! Form::label('remarks', 'Remarks: <span class="required-field"></span>', ['class' => 'col-xs-2 col-md-2'], false); !!}
                                            <div class="col-xs-10 col-md-10 form-group">
                                                {!! Form::text('remarks', $promotion->remarks, ['class' => 'form-control drop', 'placeholder' => 'Select religion']) !!}
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