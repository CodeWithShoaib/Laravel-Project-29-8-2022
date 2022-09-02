@extends('admin.layout.master')
@section('main_content')
<div class="bd-example my-5">
<h4>About Update</h4>
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
    <form  action="{{ route('admin.aboutUpdate') }}" method="post" enctype="multipart/form-data">
        @csrf


        <div class="row">
            <div class="col-6">
                <div class="form-group">
                  <label>Heading One:-</label>
                  <input type="text" class="form-control headingone" name="headingone" value="{{ $About->headingone }}">
                </div>

            </div>
            <div class="col-6">
                <div class="form-group">
                  <label>Heading two</label>
                  <input type="text" class="form-control headingtwo" name="headingtwo" value="{{ $About->headingtwo }}">
                </div>

            </div>
        </div>



        <div class="row">
            <div class="col-12">
                <div class="form-group">
                  <label>Content One:-</label>
                  <input type="text" class="form-control " name="contentone" value="{{ $About->contentone }}">
                </div>

            </div>
        </div>




        <div class="row">
            <div class="col-6">
                <div class="form-group">
                  <label>Heading Three:-</label>
                  <input type="text" class="form-control countingtwo" name="headingthree" value="{{ $About->headingthree }}">
                </div>

            </div>
            <div class="col-12">
                <div class="form-group">
                  <label>Content two:-</label>
                  <input type="text" class="form-control contenttwo" name="contenttwo" value="{{ $About->contenttwo }}">
                </div>

            </div>
        </div>



        <div class="row">
            <div class="col-6">
                <div class="form-group">
                  <label>Heading Four:-</label>
                  <input type="text" class="form-control countingfour" name="headingfour" value="{{ $About->headingfour }}">
                </div>

            </div>
            <div class="col-12">
                <div class="form-group">
                  <label>Content Three:-</label>
                  <input type="text" class="form-control headingthree" name="contentthree" value="{{ $About->contentthree }}">
                </div>

            </div>
        </div>






        <div class="row">

            <div class="col-6">
                <div class="form-group">
                  <label>Heading five:-</label>
                  <input type="text" class="form-control headingfour" name="headingfive" value="{{ $About->headingfive }}">
                </div>

            </div>

            <div class="col-6">
                <div class="form-group">
                  <label>Heading six:-</label>
                  <input type="text" class="form-control headingsix" name="headingsix" value="{{ $About->headingsix }}">
                </div>

            </div>
        </div>



        <div class="row">

            <div class="col-6">
                <div class="form-group">
                  <label>Heading Seven:-</label>
                  <input type="text" class="form-control headingseven" name="headingseven" value="{{ $About->headingseven }}">
                </div>

            </div>


        </div>


        <div class="row">
            <div class="col-12">

                <div class="form-group">
                  <label>Content Four:-</label>
                  <input type="text" class="form-control text_two" name="contentfour" value="{{ $About->contentfour }}">
                </div>
            </div>
        </div>

      <div class="form-group">
        <label>Image</label>
        <input type="file" class="form-control text_three" name="image">
        <img src="{{ asset('upload/About/'.$About->image) }}" alt="image" style="width: 200px; height:200px;">
      </div>



      <div class="form-group">
        <label>First Background Image</label>
        <input type="file" class="form-control text_three" name="bg_one">
        {{-- @dd($About->bg_one) --}}
        <img src="{{ asset('upload/About/'.$About->bg_one) }}" alt="image" style="width: 200px; height:200px;">
      </div>



      <div class="form-group">
        <label>Second Background Image</label>
        <input type="file" class="form-control text_three" name="bg_two">
        <img src="{{ asset('upload/About/'.$About->bg_two) }}" alt="image" style="width: 200px; height:200px;">
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
