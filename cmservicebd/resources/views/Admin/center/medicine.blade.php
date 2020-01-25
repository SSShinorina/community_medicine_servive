@extends('Admin.layouts.master')
@section('medicine_sent','active')
@section('main_title','Send Medicine')
@section('content_name','Send Medicine')

@section('content')
    @if(Session::has('message'))
        <h2 class="btn btn-success">{{Session::get('message')}}</h2><br>

    @endif


    {!! Form::open(['method'=>'post','url'=>'admin/center/ medicine']) !!}
    <div>
        {!! Form::label('text','Name') !!}
        {!! Form::text('text',null,['placeholder'=>'Center Name']) !!}

    </div>
    <div>
        {!! Form::label('string','District') !!}
        {{--{!! Form::text('string',null,['placeholder'=>'--Select--']) !!}--}}
         {!! Form::select('string', ['placeholder' => '--SELECT--','Dhaka','Rajshahi','Chittagong'])  !!}
    </div>
    <div>
        {!! Form::label('name','Thana') !!}
        {{--{!! Form::text('name',null,['placeholder'=>'--Select--']) !!}--}}
        {!! Form::select('string', ['placeholder' => '--SELECT--','Thana1','Thana2','Thana3'])  !!}
    </div><br>

    <div>
        {!! Form::label('title','Add Medicine') !!}
    </div>
    <div>
        {!! Form::label('string','Select Medicine') !!}
        {!! Form::text('string',null,['placeholder'=>'--Select--']) !!}
        {!! Form::label('integer','Quantity') !!}
        {!! Form::text('integer',null) !!}
        {!! Form::submit('Add') !!}
    </div>
    {!! Form::close() !!}

    {!! Form::open() !!}
    <div>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Name</th>
                <th>Quantity</th>
            </tr>
            <tr>

            </tr>
            </thead>

        </table>

    </div>
    <div>
        {!! Form::submit('Save') !!}
    </div>
    {!! Form::close() !!}

@endsection


