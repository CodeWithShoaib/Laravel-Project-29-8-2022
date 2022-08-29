@extends('admin.layout.master')
@section('main_content')
<div class="bd-example my-5">
<h4>Add Team</h4>
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
    <div class="btn">
        <a href="{{ route('admin.teamList') }}" class="btn btn-primary">
            Show Team
        </a>
    </div>
    <form  action="{{ route('admin.team.store') }}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="form-group">
        <label>Image</label>
        <input type="file" class="form-control" name="image">
      </div>


      <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name">
      </div>


      <div class="form-group">
        <label>Post</label>
        <input type="text" class="form-control" name="post">
      </div>


      <div class="form-group">
        <label>Facebook</label>
        <input type="text" class="form-control" name="facebook">
      </div>
      <div class="form-group">
        <label>	Twitter</label>
        <input type="text" class="form-control" name="twitter">
      </div>
      <div class="form-group">
        <label>	Pinterest</label>
        <input type="text" class="form-control" name="Pinterest">
      </div>
      <div class="form-group">
        <label>	Instagram</label>
        <input type="text" class="form-control" name="Instagram">
      </div>


      <input type="submit" value="Add" class="btn btn-primary my-2" id="update_data">
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
