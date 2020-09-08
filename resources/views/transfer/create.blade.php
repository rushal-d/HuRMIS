@extends('layouts.app')
@section('styles')

@endsection

@section('content')
<section class="padding-block">
    <div class="container-fluid">

        {{ Form::open(['route' => 'transfer.store']) }}
        {!! Form::hidden('personal_id', $personal->id)!!}

            <div class="row">
                    <div class="col-lg-12"><!-- first column -->
                        <div class="card custom-card create-wrapper">
                            <div class="card-header">
                                <h3>Transfers</h3>
                            </div>
                            <div class="card-body">
                                <div class="contact-form">
                                    <div class="row to-be-clone" data-increment-id="1" style="border: 1px solid #000;padding: 10px;margin-bottom:5px"><!-- main row open-->
                                        <!-- opening of one field -->
                                        <div class="col-lg-4">
                                            <div class="row">
                                                {!! Form::label('start_date', 'Start Date: <span class="required-field"></span>', ['class' => 'col-xs-4 col-md-4'], false); !!}
                                                <div class="col-xs-8 col-md-8 form-group">
                                                    {!! Form::text('transfer[1][start_date]', null, ['class' => 'form-control start_date_input flat_np', 'placeholder' => 'Pick a Date', 'id' => 'start_date']) !!}
                                                </div>
                                            </div>    
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row">
                                                {!! Form::label('end_date', 'End Date: <span class="required-field"></span>', ['class' => 'col-xs-4 col-md-4'], false); !!}
                                                <div class="col-xs-8 col-md-8 form-group">
                                                    {!! Form::text('transfer[1][end_date]', null, ['class' => 'form-control end_date_input flatt_np', 'placeholder' => 'Pick a Date', 'id' => 'end_date']) !!}
                                                </div>
                                            </div>    
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row">
                                                {!! Form::label('start_date_en', 'Start Date(EN): <span class="required-field"></span>', ['class' => 'col-xs-4 col-md-4'], false); !!}
                                                <div class="col-xs-8 col-md-8 form-group">
                                                    {!! Form::text('transfer[1][start_date_en]', null, ['class' => 'form-control start_date_en_input flat_en', 'placeholder' => 'Pick a Date', 'id' => 'start_date_en']) !!}
                                                </div>
                                            </div>    
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row">
                                                {!! Form::label('end_date_en', 'End Date(EN): <span class="required-field"></span>', ['class' => 'col-xs-4 col-md-4'], false); !!}
                                                <div class="col-xs-8 col-md-8 form-group">
                                                    {!! Form::text('transfer[1][end_date_en]', null, ['class' => 'form-control end_date_en_input flatt_en', 'placeholder' => 'Pick a Date', 'id' => 'end_date_en']) !!}
                                                </div>
                                            </div>    
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row">
                                                {!! Form::label('institution_transferedto', 'Institution Transfered To: <span class="required-field">*</span>', ['class' => 'col-xs-4 col-md-4'], false); !!}
                                                <div class="col-xs-8 col-md-8 form-group">
                                                    {!! Form::text('transfer[1][institution_transferedto]', null, ['class' => 'form-control institution_transferedto_input', 'data-validation' => 'required']) !!}
                                                </div>
                                            </div>    
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row">
                                                {!! Form::label('post', 'Major Post: <span class="required-field"></span>', ['class' => 'col-xs-4 col-md-4'], false); !!}
                                                <div class="col-xs-8 col-md-8 form-group">
                                                    {!! Form::select('transfer[1][post]', $post, null, ['id' => 'post_id', 'class' => 'form-control post_input drop', 'placeholder' => 'Choose a Post']) !!}
                                                </div>
                                            </div>    
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row">
                                                {!! Form::label('authority', 'Authority: <span class="required-field"></span>', ['class' => 'col-xs-4 col-md-4'], false); !!}
                                                <div class="col-xs-8 col-md-8 form-group">
                                                    {!! Form::text('transfer[1][authority]', null, ['class' => 'form-control authority_input']) !!}
                                                </div>
                                            </div>    
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row">
                                                {!! Form::label('level', 'Level: <span class="required-field"></span>', ['class' => 'col-xs-4 col-md-4'], false); !!}
                                                <div class="col-xs-8 col-md-8 form-group">
                                                    {!! Form::text('transfer[1][level]', null, ['class' => 'form-control level_input']) !!}
                                                </div>
                                            </div>    
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row">
                                                {!! Form::label('remarks', 'Remarks: <span class="required-field"></span>', ['class' => 'col-xs-4 col-md-4'], false); !!}
                                                <div class="col-xs-8 col-md-8 form-group">
                                                    {!! Form::text('transfer[1][remarks]', null, ['class' => 'form-control remarks_input']) !!}
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
                $('.post_input.drop')[0].selectize.destroy();
                var html = $(".to-be-clone").first().clone(true);
                html.find('.personal_id_input').attr('name', "transfer["+count+"][personal_id]");//use the count to update this clone field
                
                var id_start = 'flat_np-'+count;
                html.find('.start_date_input').attr('name', "transfer["+count+"][start_date]").prop('id', id_start).nepaliDatePicker();
                
                var id_end = 'flatt_np-'+count;
                html.find('.end_date_input').attr('name', "transfer["+count+"][end_date]").prop('id', id_end).nepaliDatePicker();
                
                var id_start_en = 'flat_en-'+count;
                html.find('.start_date_en_input').attr('name', "transfer["+count+"][start_date_en]").prop('id', id_start_en).flatpickr();
                
                var id_end_en = 'flatt_en-'+count;
                html.find('.end_date_en_input').attr('name', "transfer["+count+"][end_date_en]").prop('id', id_end_en).flatpickr();

                html.find('.institution_transferedto_input').attr('name', "transfer["+count+"][institution_transferedto]").val('');
                html.find('.post_input.drop').attr('name', "transfer["+count+"][post]");
                html.find('.authority_input').attr('name', "transfer["+count+"][authority]").val('');
                html.find('.level_input').attr('name', "transfer["+count+"][level]").val('');
                html.find('.remarks_input').attr('name', "transfer["+count+"][remarks]").val('');
            // you can update all the attributes here before the clone is added
                $(".to-be-clone").parent().find('.to-be-clone').last().after(html);//add the clone
                $('.post_input.drop').selectize();
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

        $('.drop').selectize({
        });
    </script>
@endsection

                