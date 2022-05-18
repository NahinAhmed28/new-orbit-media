
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
                                    <a href="#" class="btn btn-primary" title="View Student" data-toggle="modal" data-target="#details{{ $loop->index }}">show
                                    <i class="fa far-eye "></i>
                                    </a>
                                </td>
                            </tr>
                            <div class="modal fade" id="details{{ $loop->index }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">{{ $contact->form_first_name }} {{$contact->form_last_name}}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                x
                                            </button>
                                        </div>

                                            <div class="modal-body">
                                                <!-- Links -->
                                                <div class="list-group ">
                                                    <a href="javascript:void(0);" class="list-group-item list-group-item-action font-weight-bold">Name : {{ $contact->form_first_name }} {{$contact->form_last_name}}</a>
                                                    <a href="javascript:void(0);" class="list-group-item list-group-item-action font-weight-bold">Email: {{ $contact->form_email }}</a>
                                                    <a href="javascript:void(0);" class="list-group-item list-group-item-action font-weight-bold">Phone : {{ $contact->form_phone }}</a>
                                                    <a href="javascript:void(0);" class="list-group-item list-group-item-action font-weight-bold">Message : {{ $contact->form_message }}</a>
                                                    <a href="javascript:void(0);" class="list-group-item list-group-item-action font-weight-bold">Created At: {{ \Carbon\Carbon::parse($contact->created_at)->diffForHumans() }}</a>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                                            </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach

                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

    </div>

@endsection




