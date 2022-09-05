@extends('admin.layout.master')
@section('main_content')
<div class="bd-example my-5">
<h4>
Subscription List
</h4>
    @if (session()->has('success'))
    <div class="alert alert-success text-center">
        {{ session()->get('success') }}
    </div>

    @endif
    @if (session()->has('Error'))
    <div class="alert alert-danger text-center">
        {{ session()->get('Error') }}
    </div>
    @endif
    <div class="card mb-4">

        <div class="card-body">
            <div class="dataTable-container">
                {{-- <a class="btn btn-primary" href="{{ route('admin.team.index') }}">Add Team</a> --}}

                <table id="datatablesSimple" class="dataTable-table">
                <thead>
                    <tr>

                    <th data-sortable="" style="width: 28.9694%;"><a href="#" class="dataTable-sorter">Sno</a></th>
                    <th data-sortable="" style="width: 15.5989%;"><a href="#" class="dataTable-sorter">Subscription</a></th>
                    <th data-sortable="" style="width: 9.1922%;"><a href="#" class="dataTable-sorter">Delete</a></th>

                </tr>
                </thead>

                <tbody>

                    @foreach ($newsletter as $item)
                    <tr>
                        <td>
                            {{ $loop->index+1 }}

                        </td>
                        <td>
                            {{ $item->newsletter }}

                        </td>
                        <td>
                            <a href="{{ route('admin.subscription.delete',[$item->id]) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>

                    @endforeach





                </tbody>
        </div>
    </div>

    </div>

@endsection







