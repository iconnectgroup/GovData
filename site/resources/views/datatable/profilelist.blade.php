@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Profile List</div>

                <div class="panel-body">
                
                <table id="datatable" class="table">
                    <thead>
                        <tr>
                            <th>Name and Trade Name of Firm</th>
                            <th>Contact</th>
                            <th>Address and city, State Zip</th>
                            <th>Capabilities Narrative</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($list as $elem)
                            <tr>
                                <td><a href="{{ URL::to('/dashboard/profile?list_id='.$elem->id) }}">{!! $elem->trade_name !!}</a></td>
                                <td>{!! $elem->contact !!}</td>
                                <td>{!! $elem->address !!}</td>
                                <td>{!! $elem->capabilities !!}</td>
                            </tr>
                        @empty
                            <h3>No Data Exists!</h3>
                        @endforelse
                    </tbody>
                </table>
                
                </div>
            </div>
        </div>
    </div>
@endsection
