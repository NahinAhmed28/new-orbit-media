
@extends('admin.main')

@section('content')

    <table id="alter_pagination" class="table table-hover" style="width:100%">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone </th>
            <th>Message</th>
            <th>Created At</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($contacts as $contact)
        <tr>
            <td>{{$contact->form_first_name}}{{$contact->form_last_name}}</td>
            <td>{{$contact->form_email}}</td>
            <td>{{$contact->form_phone}}</td>
            <td>{{$contact->form_message}}</td>
            <td>{{ \Carbon\Carbon::parse($contact->created_at)->diffForHumans() }}</td>
                                        <td class="text-center">
                                            <a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-octagon table-cancel"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></a>
                                        </td>
        </tr>
        @endforeach
        </tbody>
    </table>

@endsection


