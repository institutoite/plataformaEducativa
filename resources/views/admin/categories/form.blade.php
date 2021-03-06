@extends('layouts.dashmin')

@section("content")
    <div class="row">
        <div class="col-lg-12">
            <div class="form-element py-30 multiple-column">
                <h4 class="font-20 mb-20">{{ $title }}</h4>
                @include("partials.form_errors")
                {{ Form::model($category, $options) }}
                    @isset($update)
                        @method("PUT")
                    @endisset

                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Form Group -->
                            <div class="form-group">
                                {!! Form::label('name', __("Nombre")) !!}
                                {!! Form::text('name', null, ['class' => 'form-control','required']) !!}
                            </div>
                            <!-- End Form Group -->
                            
                            <!-- Form Group -->
                            
                            <!-- End Form Group -->
                            
                            <!-- Form Group -->
                            <div class="custom-file">
                                {!! Form::file('picture', ['class' => 'custom-file-input', 'id' => 'picture']) !!}
                                {!! Form::label('picture', __("Selecciona la imagen de tu categoria"), ['class' => 'custom-file-label','required']) !!}
                            </div>
                            <!-- End Form Group -->
                        </div>

                        <div class="col-lg-6">
                            <!-- Form Group -->
                            <div class="form-group">
                                {!! Form::label('description', __("Descripcion")) !!}
                                {!! Form::text('description', null, ['class' => 'form-control','required']) !!}
                            </div>
                            <!-- End Form Group -->
                            
                            <!-- Form Group -->
                            
                            <!-- End Form Group -->
                        </div>

                        <div class="col-lg-12">
                            <!-- Form Group -->
                            
                            <!-- End Form Group -->
                        </div>

                        

                    </div>
                    

                    
                    <!-- Form Row -->
                    <div class="form-row">
                            <div class="col-12 text-right">
                                {!! Form::submit($textButton, ['class' => 'btn long','required']); !!}
                            </div>
                        </div>
                        <!-- End Form Row -->

                {{ Form::close() }}
            </div>
        </div>
    </div>

@endsection