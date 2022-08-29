@extends('admin.layout.master')
@section('main_content')
<div class="bd-example my-5">
<h4>Portfolio Update</h4>
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
    <form  action="{{ route('admin.portfolioUpdate') }}" method="post" enctype="multipart/form-data">
        @csrf


        <div class="row">
            <div class="col-12">
                <div class="form-group">
                  <label>Heading:-</label>
                  <input type="text" class="form-control heading" name="heading" value="{{ $portfolio->heading }}">
                </div>

            </div>

        </div>

        <div class="row">
            <div class="col-12">
                <div class="form-group">
                  <input type="submit" value="update" class="btn btn-primary">
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
