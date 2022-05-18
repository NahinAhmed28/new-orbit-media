
@extends('admin.index')

@section('contents')

    {!! Menu::render() !!}



@endsection



@push('scripts')
    {!! Menu::scripts() !!}
@endpush
