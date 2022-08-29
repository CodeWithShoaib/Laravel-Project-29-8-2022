@extends('admin.layout.master')
@section('main_content')
<div class="bd-example my-5">
<h4>Header Update</h4>
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
    <form  action="{{ route('admin.update') }}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="form-group">
        <label for="exampleFormControlInput1">navone</label>
        <input type="text" class="form-control navone" name="navone" value="{{ $header ->navone }}">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">navtwo</label>
        <input type="text" class="form-control navtwo" name="navtwo" value="{{ $header ->navtwo }}">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">navthree</label>
        <input type="text" class="form-control navthree" name="navthree" value="{{ $header ->navthree }}">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">navfour</label>
        <input type="text" class="form-control navfour" name="navfour" value="{{ $header ->navfour }}">
      </div>
      <div class="form-group">
        <label>navfive</label>
        <input type="text" class="form-control navfive" name="navfive" value="{{ $header ->navfive }}">
      </div>
      <div class="form-group">
        <label>navsix</label>
        <input type="text" class="form-control navsix" name="navsix" value="{{ $header ->navsix }}">
      </div>
      <div class="form-group">
        <label>navseven</label>
        <input type="text" class="form-control navseven" name="navseven" value="{{ $header ->navseven }}">
      </div>
      <div class="form-group">
        <label>logo</label>
        <input type="file" class="form-control logo" name="logo">
      </div>
      <input type="submit" value="Update" class="btn btn-primary my-2" id="update_data">
    </form>
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
