@extends('layouts.app')
@section('styles')

@endsection

@section('content')
<section class="padding-block">
    <div class="container-fluid">

        {{ Form::open(['route' => 'training.store']) }}
        {!! Form::hidden('personal_id', $personal->id)!!}

            <div class="row">
                    <div class="col-lg-12"><!-- first column -->
                        <div class="card custom-card create-wrapper">
                            <div class="card-header">
                                <h3>Training</h3>
                            </div>
                            <div class="card-body">
                                <div class="contact-form">
                                    <div class="row to-be-clone" data-increment-id="1" style="border: 1px solid #000;padding: 10px;margin-bottom:5px"><!-- main row open-->
                                        <!-- opening of one field -->
                                        <div class="col-lg-4">
                                            <div class="row">
                                                {!! Form::label('start_date', 'Start Date: <span class="required-field"></span>', ['class' => 'col-xs-4 col-md-4'], false); !!}
                                                <div class="col-xs-8 col-md-8 form-group">
                                                    {!! Form::text('training[1][start_date]', null, ['class' => 'form-control start_date_input flat_np', 'placeholder' => 'Pick a Date', 'id' => 'date_start']) !!}
                                                </div>
                                            </div>    
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row">
                                                {!! Form::label('end_date', 'End Date: <span class="required-field"></span>', ['class' => 'col-xs-4 col-md-4'], false); !!}
                                                <div class="col-xs-8 col-md-8 form-group">
                                                    {!! Form::text('training[1][end_date]', null, ['class' => 'form-control end_date_input flatt_np', 'placeholder' => 'Pick a Date', 'id' => 'date_end']) !!}
                                                </div>
                                            </div>    
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row">
                                                {!! Form::label('start_date_en', 'Start Date(EN): <span class="required-field"></span>', ['class' => 'col-xs-4 col-md-4'], false); !!}
                                                <div class="col-xs-8 col-md-8 form-group">
                                                    {!! Form::text('training[1][start_date_en]', null, ['class' => 'form-control start_date_en_input flat_en', 'placeholder' => 'Pick a Date', 'id' => 'date_start_en']) !!}
                                                </div>
                                            </div>    
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row">
                                                {!! Form::label('end_date_en', 'End Date(EN): <span class="required-field"></span>', ['class' => 'col-xs-4 col-md-4'], false); !!}
                                                <div class="col-xs-8 col-md-8 form-group">
                                                    {!! Form::text('training[1][end_date_en]', null, ['class' => 'form-control end_date_en_input flatt_en', 'placeholder' => 'Pick a Date', 'id' => 'date_end_en']) !!}
                                                </div>
                                            </div>    
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row">
                                                {!! Form::label('title', 'Title of Training: <span class="required-field"> *</span>', ['class' => 'col-xs-4 col-md-4'], false); !!}
                                                <div class="col-xs-8 col-md-8 form-group">
                                                    {!! Form::text('training[1][title]', null, ['class' => 'form-control title_input', 'data-validation' => 'required']) !!}
                                                </div>
                                            </div>    
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row">
                                                {!! Form::label('institution_name', 'Institution Name: <span class="required-field"></span>', ['class' => 'col-xs-4 col-md-4'], false); !!}
                                                <div class="col-xs-8 col-md-8 form-group">
                                                    {!! Form::text('training[1][institution_name]', null, ['class' => 'form-control institution_name_input']) !!}
                                                </div>
                                            </div>    
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row">
                                                {!! Form::label('subject', 'Subject: <span class="required-field"></span>', ['class' => 'col-xs-4 col-md-4'], false); !!}
                                                <div class="col-xs-8 col-md-8 form-group">
                                                    {!! Form::text('training[1][subject]', null, ['class' => 'form-control subject_input']) !!}
                                                </div>
                                            </div>    
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row">
                                                {!! Form::label('sponsor', 'Sponsor: <span class="required-field"></span>', ['class' => 'col-xs-4 col-md-4'], false); !!}
                                                <div class="col-xs-8 col-md-8 form-group">
                                                    {!! Form::text('training[1][sponsor]', null, ['class' => 'form-control sponsor_input']) !!}
                                                </div>
                                            </div>    
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row">
                                                {!! Form::label('country_of_training', 'Country of Training: <span class="required-field"></span>', ['class' => 'col-xs-4 col-md-4'], false); !!}
                                                <div class="col-xs-8 col-md-8 form-group">
                                                    {!! Form::text('training[1][country_of_training]', null, ['class' => 'form-control country_of_training_input']) !!}
                                                </div>
                                            </div>    
                                        </div>
                                    </div>
                                    <div class="added-row" id="added-row"></div>

                                    <p class="text-left"> 
                                        <a href="javascript:void(0);" class="btn custom-btn btn-success" id="add" type="submit">Add More</a>
                                        <a href="javascript:void(0);" class="btn custom-btn btn-success remove" id="add" type="submit">Remove</a>
                                    </p>
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
    
        var count = 1; // Create a count
        $(document).ready(function(){
            $("body").on("click","#add",function(){
                count++; // increase the count
                var html = $(".to-be-clone").first().clone(true);
                html.find('.personal_id_input').attr('name', "training["+count+"][personal_id]");//use the count to update this clone field
                html.find('.title_input').attr('name', "training["+count+"][title]").val('');
                
                var id_start = 'flat_np-'+count;
                html.find('.start_date_input').attr('name', "training["+count+"][start_date]").prop('id', id_start).nepaliDatePicker({npdMonth: true,
                npdYear: true});
                
                var id_end = 'flatt_np-'+count;
                html.find('.end_date_input').attr('name', "training["+count+"][end_date]").prop('id', id_end).nepaliDatePicker();
                
                var id_start_en = 'flat_en-'+count;
                html.find('.start_date_en_input').attr('name', "training["+count+"][start_date_en]").prop('id', id_start_en).flatpickr();
                
                var id_end_en = 'flatt_en-'+count;
                html.find('.end_date_en_input').attr('name', "training["+count+"][end_date_en]").prop('id', id_end_en).flatpickr();

                html.find('.institution_name_input').attr('name', "training["+count+"][institution_name]").val('');
                html.find('.subject_input').attr('name', "training["+count+"][subject]").val('');
                html.find('.sponsor_input').attr('name', "training["+count+"][sponsor]").val('');
                html.find('.country_of_training_input').attr('name', "training["+count+"][country_of_training]").val('');
            // you can update all the attributes here before the clone is added
                $(".to-be-clone").parent().find('.to-be-clone').last().after(html);//add the clone
                // $("#myDiv").append("Remove");
            });
            
        })
        $('.remove').click(function() {
          if($(".to-be-clone").length>1){
              $(".contact-form").find(".to-be-clone").last().remove();
          }
            return false;
        });
    </script>

        <script>
            $('.flat_np').nepaliDatePicker({
                npdMonth: true,
                npdYear: true
            });
            $('.flatt_np').nepaliDatePicker({
                npdMonth: true,
                npdYear: true
            });
            $('.flat_en').flatpickr({
                
            });
            $('.flatt_en').flatpickr({
                
            });
        </script>
    
    
    
@endsection