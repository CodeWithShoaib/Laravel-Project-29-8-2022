@extends('admin.layout.master')
@section('main_content')
<div class="bd-example my-5">
<h4>Contact Update</h4>
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
    <form  action="{{ route('admin.contact.update') }}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="form-group my-4">
        <label >Title</label>
        <input type="text" class="form-control navone" name="title" value="{{ $contact ->title }}">
      </div>


      <div class="form-group my-4">
        <label>Image</label>
        <input type="file" class="form-control"  name="image">
      </div>

      <div class="form-group my-4">
        <img src="{{ asset('upload/image/contact/'.$contact->image) }}" alt="image" >
      </div>




      <div class="form-group my-4">
        <label for="exampleFormControlInput1">Office Heading</label>
        <input type="text" class="form-control" name="office_heading" value="{{ $contact ->office_heading }}">
      </div>
      <div class="form-group my-4">
        <label for="exampleFormControlInput1">Message Heading</label>
        <input type="text" class="form-control" name="message_heading" value="{{ $contact ->message_heading }}">
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
