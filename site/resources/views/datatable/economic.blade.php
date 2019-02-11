@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Economic Group</div>

                <div class="panel-body">
                
                <table id="datatable" class="table">
                    <thead>
                        <tr>
                            <th>Economic Group</th>
                            <th>Number of Firms Found</th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse ($economs as $econom)
                        <tr>
                            <td><a href="{{ URL::to('/dashboard/profile-list?econom_id='.$econom->id) }}">{!! $econom->economic_group !!}</a></td>
                            <td>{!! $econom->num_of_firms !!}</td>
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
