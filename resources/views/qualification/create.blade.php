@extends('layouts.app')
@section('styles')

@endsection

@section('content')
<section class="padding-block">
    <div class="container-fluid">

        {{ Form::open(['route' => 'qualification.store']) }}
        {!! Form::hidden('personal_id', $personal->id)!!}

            <div class="row">
                    <div class="col-lg-12"><!-- first column -->
                        <div class="card custom-card create-wrapper">
                            <div class="card-header">
                                <h3>Qualification</h3>
                            </div>
                            <div class="card-body">
                                <div class="contact-form">
                                    <div class="row to-be-clone" data-increment-id="1" style="border: 1px solid #000;padding: 10px;margin-bottom:5px"><!-- main row open-->
                                        <!-- opening of one field -->
                                        <div class="col-lg-4">
                                            <div class="row">
                                                {!! Form::label('degree', 'Qualification Degree: <span class="required-field"> *</span>', ['class' => 'col-xs-4 col-md-4'], false); !!}
                                                <div class="col-xs-8 col-md-8 form-group">
                                                    {!! Form::text('education[1][degree]', null, ['class' => 'form-control degree_input', 'data-validation' => 'required']) !!}
                                                </div>
                                            </div>    
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row">
                                                {!! Form::label('year', 'Year: <span class="required-field"></span>', ['class' => 'col-xs-4 col-md-4'], false); !!}
                                                <div class="col-xs-8 col-md-8 form-group">
                                                    {!! Form::text('education[1][year]', null, ['class' => 'form-control year_input']) !!}
                                                </div>
                                            </div>    
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row">
                                                {!! Form::label('grade', 'Division/Grade/Percentage: <span class="required-field"><span>', ['class' => 'col-xs-4 col-md-4'], false); !!}
                                                <div class="col-xs-8 col-md-8 form-group">
                                                    {!! Form::text('education[1][grade]', null, ['class' => 'form-control grade_input']) !!}
                                                </div>
                                            </div>    
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row">
                                                {!! Form::label('major_subject', 'Major Subject: <span class="required-field"></span>', ['class' => 'col-xs-4 col-md-4'], false); !!}
                                                <div class="col-xs-8 col-md-8 form-group">
                                                    {!! Form::text('education[1][major_subject]', null, ['class' => 'form-control major_subject_input']) !!}
                                                </div>
                                            </div>    
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row">
                                                {!! Form::label('institution', 'Name of Institution: <span class="required-field"></span>', ['class' => 'col-xs-4 col-md-4'], false); !!}
                                                <div class="col-xs-8 col-md-8 form-group">
                                                    {!! Form::text('education[1][institution]', null, ['class' => 'form-control institution_input']) !!}
                                                </div>
                                            </div>    
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row">
                                                {!! Form::label('sponsor', 'Sponsor: <span class="required-field"></span>', ['class' => 'col-xs-4 col-md-4'], false); !!}
                                                <div class="col-xs-8 col-md-8 form-group">
                                                    {!! Form::text('education[1][sponsor]', null, ['class' => 'form-control sponsor_input']) !!}
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
                var html = $(".to-be-clone").first().clone();
                html.find('.personal_id_input').attr('name', "education["+count+"][personal_id]");//use the count to update this clone field
                html.find('.degree_input').attr('name', "education["+count+"][degree]").val('');
                html.find('.year_input').attr('name', "education["+count+"][year]").val('');
                html.find('.grade_input').attr('name', "education["+count+"][grade]").val('');
                html.find('.major_subject_input').attr('name', "education["+count+"][major_subject]").val('');
                html.find('.institution_input').attr('name', "education["+count+"][institution]").val('');
                html.find('.sponsor_input').attr('name', "education["+count+"][sponsor]").val('');
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
@endsection