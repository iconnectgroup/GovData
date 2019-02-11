@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel-body">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong><h1 class="page-title">Quick Market Search</h1></strong>
                    </div>
                    
                    <div class="panel-body">
                        {!! Form::open(['method' => 'get', 'route' => ['admin.profile']]) !!}    
                            <div class="row">
                                <div class="col-md-12">
                                    <h3>Select NAICS Code</h3>
                                </div>
                                <div class="col-xs-3 form-group">
                                    {!! Form::label('naics', 'NAICS Code*', ['class' => 'control-label']) !!}
                                    {!! Form::select('naics', $naicses, null, ['class' => 'form-control', 'placeholder' => '- Select naics -']) !!}

                                    <p class="help-block"></p>
                                    @if($errors->has('naics'))
                                        <p class="help-block">
                                            {{ $errors->first('naics') }}
                                        </p>
                                    @endif
                                </div>
                            </div>
                        {!! Form::submit('Search', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
