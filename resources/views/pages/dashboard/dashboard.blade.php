@extends('layouts.mainlayout')

@section('title','Dashboard')
    
@section('content')
    
    <h1>Welcome, {{Auth::user()->username}}</h1>

    <div class="row my-5">
        <div class="col-lg-4">
            <div class="card-data users">
                <div class="row">
                    <div class="col-6"><i class="bi bi-journal-album"></i></div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc">Users</div>
                        <div class="card-count">{{$userCount}}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card-data categories">
                <div class="row">
                    <div class="col-6"><i class="bi bi-list-ul"></i></div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc">Categories</div>
                        <div class="card-count">{{$categoryCount}}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card-data books">
                <div class="row">
                    <div class="col-6"><i class="bi bi-people"></i></div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc">Books</div>
                        <div class="card-count">{{$bookCount}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5">
        <h2>Rent Logs</h2>

        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>User</th>
                    <th>Book Title</th>
                    <th>Rent Date</th>
                    <th>Return Date</th>
                    <th>Actual Return Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="7" class="text-center">No Data Yet!</td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection