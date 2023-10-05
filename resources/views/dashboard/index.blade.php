@extends('dashboard.layouts.main')

@section('container')
    <div class="card-body">
        <h4 class="card-title">Welcome To Admin Dashboard, {{ Auth::user()->name }}!</h4>
        <p class="card-category">An admin dashboard serves as a central hub for administrators to monitor, manage, and control various aspects of an application or system. It typically includes a range of features and components that provide valuable insights, tools, and functionalities.</p>
    </div>
    <div class="card-footer">
        <div class="stats">
            <i class="material-icons">access_time</i> Last Login Time : {{ Auth::user()->last_login_time }}
        </div>
    </div>
@endsection