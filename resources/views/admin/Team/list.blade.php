@extends('admin.layout.master')
@section('main_content')
<div class="bd-example my-5">
<h4>
Team Members
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
                <a class="btn btn-primary" href="{{ route('admin.team.index') }}">Add Team</a>

                <table id="datatablesSimple" class="dataTable-table">
                <thead>
                    <tr><th data-sortable="" style="width: 19.6379%;"><a href="#" class="dataTable-sorter">Id</a>
                    </th>
                    <th data-sortable="" style="width: 28.9694%;"><a href="#" class="dataTable-sorter">Image</a></th>
                    <th data-sortable="" style="width: 15.5989%;"><a href="#" class="dataTable-sorter">Name</a></th>
                    <th data-sortable="" style="width: 9.1922%;"><a href="#" class="dataTable-sorter">Post</a></th>
                    <th data-sortable="" style="width: 15.1811%;"><a href="#" class="dataTable-sorter">Facebook</a></th>
                    <th data-sortable="" style="width: 15.1811%;"><a href="#" class="dataTable-sorter">Twitter</a></th>
                    <th data-sortable="" style="width: 15.1811%;"><a href="#" class="dataTable-sorter">Pinterest</a></th>
                    <th data-sortable="" style="width: 15.1811%;"><a href="#" class="dataTable-sorter">Instagram</a></th>
                    <th data-sortable="" style="width: 15.1811%;"><a href="#" class="dataTable-sorter">Actions</a></th>
                </tr>
                </thead>

                <tbody>
                    @foreach ($Customer_data as $item)
                    <tr>
                        <td>
                            {{ $item->id }}
                        </td>
                        <td>
                       <img src="{{ asset('upload/team/'.$item->image) }}" alt="image" style="width:200px; height:200px;">
                        </td>
                        <td>
                            {{ $item->name }}
                        </td>
                        <td>
                            {{ $item->post }}
                        </td>
                        <td>
                            {{ $item->facebook }}
                        </td>
                        <td>
                            {{ $item->twitter }}
                        </td>
                        <td>
                            {{ $item->Pinterest }}
                        </td>
                        <td>
                            {{ $item->Instagram }}
                        </td>

                        <td>
                            <a href="{{ route('admin.team.edit',[$item->id])}}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('admin.team.destroy',[$item->id])}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>

                        </td>

                    </tr>

                    @endforeach


                </tbody>
            </table></div><div class="dataTable-bottom"><div class="dataTable-info">Showing 1 to 10 of 57 entries</div><nav class="dataTable-pagination"><ul class="dataTable-pagination-list"><li class="active"><a href="#" data-page="1">1</a></li><li class=""><a href="#" data-page="2">2</a></li><li class=""><a href="#" data-page="3">3</a></li><li class=""><a href="#" data-page="4">4</a></li><li class=""><a href="#" data-page="5">5</a></li><li class=""><a href="#" data-page="6">6</a></li><li class="pager"><a href="#" data-page="2">›</a></li></ul></nav></div></div>
        </div>
    </div>

    </div>

@endsection



@section('script')
<script>
//     $(document).ready(function(){
//         $('#update_data').click(function(e){
//             e.preventDefault();
//             var data={
//                 "navone":$('.navone').val(),
//                 "navtwo":$('.navtwo').val(),
//                 "navthree":$('.navthree').val(),
//                 "navfour":$('.navfour').val(),
//                 "navfive":$('.navfive').val(),
//                 "navsix":$('.navsix').val(),
//                 "navseven":$('.navseven').val(),
//                 "logo":$('.logo').val(),
//             }
//             $.ajaxSetup({
//                 headers: {
//                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//                 }
//             });


//             $.ajax({
//                 type: "PATCH",
//                 url: "/admin/header/header",
//                 data: "data",
//                 dataType: "json",
//                 success: function (response) {
//                     if(response.status==400){


//                         alert("Error Occured data is not updated!");
//                     }
//                     else{
//                         alert("Data is Updated! ");
//                     }

//                 }
//             });
//         })


// })

</script>


@endsection
