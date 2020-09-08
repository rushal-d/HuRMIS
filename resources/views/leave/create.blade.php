@extends('layouts.app')
@section('styles')

@endsection

@section('content')
<section class="padding-block">
    <div class="container-fluid">

        {{ Form::open(['route' => 'leave.store']) }}
        {!! Form::hidden('personal_id', $personal->id)!!}

            <div class="row">
                    <div class="col-lg-12"><!-- first column -->
                        <div class="card custom-card create-wrapper">
                            <div class="card-header">
                                <h3>Leave</h3>
                            </div>
                            <div class="card-body">
                                <div class="contact-form">
                                    <div class="row to-be-clone" data-increment-id="1" style="border: 1px solid #000;padding: 10px;margin-bottom:5px"><!-- main row open-->
                                        <!-- opening of one field -->
                                        <div class="col-lg-4">
                                            <div class="row">
                                                {!! Form::label('from_date', 'From Date: <span class="required-field"></span>', ['class' => 'col-xs-4 col-md-4'], false); !!}
                                                <div class="col-xs-8 col-md-8 form-group">
                                                    {!! Form::text('leave[1][from_date]', null, ['class' => 'form-control from_date_input flat_np', 'placeholder' => 'Pick a Date', 'id' => 'from_date']) !!}
                                                </div>
                                            </div>    
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row">
                                                {!! Form::label('to_date', 'To Date: <span class="required-field"></span>', ['class' => 'col-xs-4 col-md-4'], false); !!}
                                                <div class="col-xs-8 col-md-8 form-group">
                                                    {!! Form::text('leave[1][to_date]', null, ['class' => 'form-control to_date_input flatt_np', 'placeholder' => 'Pick a Date', 'id' => 'to_date']) !!}
                                                </div>
                                            </div>    
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row">
                                                {!! Form::label('from_date_en', 'From Date(EN): <span class="required-field"></span>', ['class' => 'col-xs-4 col-md-4'], false); !!}
                                                <div class="col-xs-8 col-md-8 form-group">
                                                    {!! Form::text('leave[1][from_date_en]', null, ['class' => 'form-control from_date_en_input flat_en', 'placeholder' => 'Pick a Date', 'id' => 'from_date_en']) !!}
                                                </div>
                                            </div>    
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row">
                                                {!! Form::label('to_date_en', 'To Date(EN): <span class="required-field"></span>', ['class' => 'col-xs-4 col-md-4'], false); !!}
                                                <div class="col-xs-8 col-md-8 form-group">
                                                    {!! Form::text('leave[1][to_date_en]', null, ['class' => 'form-control to_date_en_input flatt_en', 'placeholder' => 'Pick a Date', 'id' => 'to_date_en']) !!}
                                                </div>
                                            </div>    
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row">
                                                {!! Form::label('type_of_leave', 'Type of Leave: <span class="required-field"> *</span>', ['class' => 'col-xs-4 col-md-4'], false); !!}
                                                <div class="col-xs-8 col-md-8 form-group">
                                                    {!! Form::text('leave[1][type_of_leave]', null, ['class' => 'form-control type_of_leave_input', 'data-validation' => 'required']) !!}
                                                </div>
                                            </div>    
                                        </div>
                                    </div>
                                    <div class="added-row" id="added-row"></div>

                                    <p class="text-left"> 
                                        <a href="javascript:void(0);" class="btn custom-btn btn-success" id="add" type="submit">Add More</a>
                                        <a href="javascript:void(0);" class="btn custom-btn btn-success remove" id="remove" type="submit">Remove</a>
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
                html.find('.personal_id_input').attr('name', "leave["+count+"][personal_id]");//use the count to update this clone field
                html.find('.type_of_leave_input').attr('name', "leave["+count+"][type_of_leave]").val('');
                
                var id_from = 'flat_np-'+count;
                html.find('.from_date_input').attr('name', "leave["+count+"][from_date]").prop('id', id_from).nepaliDatePicker();
                
                var id_to = 'flatt_np-'+count;
                html.find('.to_date_input').attr('name', "leave["+count+"][to_date]").prop('id', id_to).nepaliDatePicker();
                
                var id_from_en = 'flat_en-'+count;
                html.find('.from_date_en_input').attr('name', "leave["+count+"][from_date_en]").prop('id', id_from_en).flatpickr();
                
                var id_to_en = 'flatt_en-'+count;
                html.find('.to_date_en_input').attr('name', "leave["+count+"][to_date_en]").prop('id', id_to_en).flatpickr();


            // you can update all the attributes here before the clone is added
                $('.to-be-clone').parent().find('.to-be-clone').last().after(html);//add the clone
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
        $('.flat_np').nepaliDatePicker();
        $('.flatt_np').nepaliDatePicker();
        $('.flat_en').flatpickr();
        $('.flatt_en').flatpickr();
    </script>
@endsection