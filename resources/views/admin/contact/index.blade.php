
@extends('admin.layout.app')

@section('content')

    <div class="row layout-top-spacing">

        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-6">
                <div class="table-responsive mb-4 mt-4">
                    <table id="zero-config" class="table table-hover" style="width:100%">
                        <thead>
                        <th>title</th>
                        <th>meta_title</th>
                        <th>meta_desc </th>
                        <th>meta_tag</th>
                        <th>slug </th>
                        <th>category </th>
                        <th>cover_image </th>
                        <th>description </th>
                        <th class="text-center">Action</th>
                        </thead>
                        <tbody>
                        @foreach($blogs as $blog)
                            <tr>
                                <td>{{$blog->title}}</td>
                                <td>{{$blog->meta_title}}</td>
                                <td>{{$blog->slug}}</td>
                                <td>{{$blog->category}}</td>
                                <td>{{$blog->cover_image}}</td>
                                <td>{{$blog->description}}</td>
                                <td>{{ \Carbon\Carbon::parse($blog->created_at)->diffForHumans() }}</td>
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
                                            <h5 class="modal-title" id="exampleModalLabel">{{ $blog->title }} </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                x
                                            </button>
                                        </div>

                                            <div class="modal-body">
                                                <!-- Links -->
                                                <div class="list-group ">
                                                    <a href="javascript:void(0);" class="list-group-item list-group-item-action font-weight-bold">title : {{ $blog->title }} </a>
                                                    <a href="javascript:void(0);" class="list-group-item list-group-item-action font-weight-bold">meta_title: {{ $blog->meta_title }}</a>
                                                    <a href="javascript:void(0);" class="list-group-item list-group-item-action font-weight-bold">meta_desc : {{ $blog->meta_desc }}</a>
                                                    <a href="javascript:void(0);" class="list-group-item list-group-item-action font-weight-bold">meta_tag : {{ $blog->meta_tag }}</a>
                                                    <a href="javascript:void(0);" class="list-group-item list-group-item-action font-weight-bold">slug : {{ $blog->slug }}</a>
                                                    <a href="javascript:void(0);" class="list-group-item list-group-item-action font-weight-bold">category : {{ $blog->category }}</a>
                                                    <a href="javascript:void(0);" class="list-group-item list-group-item-action font-weight-bold">cover_image : {{ $blog->cover_image }}</a>
                                                    <a href="javascript:void(0);" class="list-group-item list-group-item-action font-weight-bold">description : {{ $blog->description }}</a>
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




