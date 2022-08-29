@extends('admin.layout.master')
@section('main_content')
<div class="bd-example my-5">
<h4>Edit Blog</h4>
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
    <div class="btn d-flex flex-end">
        <a href="{{ route('admin.blogsList') }}">

            <button class="btn btn-primary">Show Blog</button>
        </a>
    </div>
    <form  action="{{ route('admin.blogs.update',[$blog->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method("PUT")
      <div class="form-group">
        <label>Heading</label>
        <input type="text" class="form-control" name="heading" value="{{ $blog->heading }}">
      </div>

      <div class="form-group">
        <label>Content</label>
        <input type="text" class="form-control" name="content" value="{{ substr($blog->content,0,20) }}">
      </div>
      <div class="form-group">
        <label>Image</label>
        <input type="file" class="form-control" name="image">
        <img src="{{ asset('upload/blog/'.$blog->image)}}" alt="image" style="width: 200px;height:200px;">

      </div>
      <input type="submit" value="Update" class="btn btn-primary my-2">
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
