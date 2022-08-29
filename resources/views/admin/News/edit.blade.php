@extends('admin.layout.master')
@section('main_content')
<div class="bd-example my-5">
<h4>Edit News</h4>
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
        <a href="{{ route('admin.newsList') }}">

            <button class="btn btn-primary">Show News</button>
        </a>
    </div>
    <form  action="{{ route('admin.news.update',[$news->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method("PUT")
      <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" name="title" value="{{ $news->title }}">
      </div>

      <div class="form-group">
        <label>Content</label>
        <input type="text" class="form-control" name="content" value="{{ substr($news->content,0,20) }}">
      </div>
      <div class="form-group">
        <label>Image</label>
        <input type="file" class="form-control" name="image">
        <img src="{{ asset('upload/news/'.$news->image)}}" alt="image">

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
