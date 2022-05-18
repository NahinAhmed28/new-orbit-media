
@extends('admin.main')

@section('content')

    <div class="row layout-top-spacing">

        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-6">
                <div class="table-responsive mb-4 mt-4">
                    <table id="zero-config" class="table table-hover" style="width:100%">
                        <thead>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone </th>
                        <th>Message</th>
                        <th>Created At</th>
                        <th class="text-center">Action</th>
                        </thead>
                        <tbody>
                        @foreach($contacts as $contact)
                            <tr>
                                <td>{{$contact->form_first_name}}{{$contact->form_last_name}}</td>
                                <td>{{$contact->form_email}}</td>
                                <td>{{$contact->form_phone}}</td>
                                <td>{{$contact->form_message}}</td>
                                <td>{{ \Carbon\Carbon::parse($contact->created_at)->diffForHumans() }}</td>
                                <td>
                                    <a href="{{ route('admin.contact.show',[$contact->id]) }}" title="View Student">
                                        <button class="btn btn-info btn-sm"> <i class="fa fa-eye" aria-hidden="true"></i> Show
                                        </button>
                                    </a>
                                </td>

                            </tr>
                        @endforeach
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

    </div>

@endsection




