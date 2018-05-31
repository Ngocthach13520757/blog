
@extends('main')

@section('title','Role Page')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel pannel-primary">
                <div class="panel-heading">ALL User:</div>
                <div class="panel-body">

                    <table>
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{$users->name}}</td>
                                    @php
                                        $roles = $user->roles();
                                    @endphp
                                    <td>
                                        @foreach ($roles as $role)
                                            $role->name
                                        @endforeach
                                    </td>
                                </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection