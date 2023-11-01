@extends('layout.main')

@section('container')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Merchant Name</th>
                        <th scope="col">Username</th>
                        <th scope="col">Area</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($merchs as $merch)
                        @if(!$merch->isApproved)
                        <tr>
                            <td>{{ $merch->name }}</td>
                            <td>{{ $merch->user->username }}</td>
                            <td>{{ $merch->area->area_name }}</td>
                            <td>
                                <button type="button" class="btn btn-success">Approve</button>
                                <button type="button" class="btn btn-danger">Reject</button>
                            </td>
                        </tr>
                        @endif
                   @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
