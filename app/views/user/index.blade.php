@extends('layout')

@section('content')
    <div class="row no-gutter">
        <div class="col-sm-8 col-xs-6">
            <span class="h2">Person</span>
        </div>
        <div class="col-sm-2 col-xs-3">
            <a href="{{ url('user/group/city') }}" class="btn btn-blue-fresh btn-block btn-groupby {{ Request::is('user/group/city') ? 'active' : '' }}">
                By City
            </a>
        </div>
        <div class="col-sm-2 col-xs-3">
            <a href="{{ url('user/group/department') }}" class="btn btn-blue-fresh btn-block btn-groupby {{ Request::is('user/group/department') ? 'active' : '' }}">
                By Department
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <table class="table">
                <thead>
                    <tr>
                        <th class="col-sm-4">Name</th>
                        <th class="col-sm-2">City</th>
                        <th class="col-sm-2">Department</th>
                        <th class="col-sm-1"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $group_value => $group_users)
                    <tr class="row-group">
                        <td colspan="4">{{ $group_value }}</td>
                    </tr>
                    @foreach ($group_users as $user)
                    <tr>
                        <td>
                            <strong>{{ $user['name'] }}</strong>
                            <br>
                            <span class="text-muted small">{{ $user['position'] }}</span>
                        </td>
                        <td>{{ $user['city'] }}</td>
                        <td>{{ $user['department'] }}</td>
                        <td class="text-center">
                            <span class="status status-{{{ $user['status'] }}}">
                                {{ $status[$user['status']] }}
                            </span>
                        </td>
                    </tr>
                    @endforeach
                    @endforeach
            </table>
        </div>
    </div>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
@stop