@extends('admin.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card card-custom">
                    <div class="card-header">
                        {{--                        <h3 class="card-title">{{$pageTitle}}</h3>--}}
                    </div>
                    <h5 class="card-title"> Name : {{ $contacts->form_first_name }}{{$contacts->form_last_name}}</h5>
                    <p class="card-text">Email : {{ $contacts->form_email }}</p>
                    <p class="card-text">Phone : {{ $contacts->form_phone }}</p>
                    <p class="card-text">Message : {{ $contacts->form_message }}</p>
                    <p class="card-text">Created At: {{ \Carbon\Carbon::parse($contacts->created_at)->diffForHumans() }}</p>

                </div>
            </div>
        </div>
    </div>
@endsection
