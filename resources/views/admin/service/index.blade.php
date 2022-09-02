@extends('admin.layout.master')
@section('main_content')
<div class="bd-example my-5">
<h4>Service Update</h4>
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
    <form  action="{{ route('admin.serviceUpdate') }}" method="post" enctype="multipart/form-data">
        @csrf


        <div class="row">
            <div class="col-6">
                <div class="form-group">
                  <label>Heading One:-</label>
                  <input type="text" class="form-control headingone" name="headingone" value="{{ $service->headingone }}">
                </div>

            </div>
            <div class="col-6">
                <div class="form-group">
                  <label>Heading two</label>
                  <input type="text" class="form-control headingtwo" name="headingtwo" value="{{ $service->headingtwo }}">
                </div>

            </div>
        </div>



        <div class="row">
            <div class="col-12">
                <div class="form-group">
                  <label>Content One:-</label>
                  <input type="text" class="form-control " name="contentone" value="{{ $service->contentone }}">
                </div>

            </div>
        </div>




        <div class="row">
            <div class="col-6">
                <div class="form-group">
                  <label>Heading Three:-</label>
                  <input type="text" class="form-control countingtwo" name="headingthree" value="{{ $service->headingthree }}">
                </div>

            </div>

        </div>

        <div class="row">
            <div class="col-6">
                <div class="form-group">
                  <label>Background Image:-</label>
                  <input type="file" class="form-control contenttwo" name="bg_one">
                </div>

            </div>
            <div class="col-6">
              <img src="{{ asset('upload/service/'.$service->bg_one) }}" alt="image" style="width: 200px; height:200px">
            </div>
        </div>
        <div class="row my-4">
            <div class="col-6">
                <div class="form-group">
                  <label>Image:-</label>
                  <input type="file" class="form-control contenttwo" name="image">
                </div>

            </div>
            <div class="col-6">
              <img src="{{ asset('upload/service/'.$service->image) }}" alt="image" style="width: 200px; height:200px">
            </div>
        </div>



        <div class="row">
            <div class="col-6">
                <div class="form-group">
                  <label>Content Two:-</label>
                  <input type="text" class="form-control" name="contenttwo" value="{{ $service->contenttwo }}">
                </div>

            </div>
            <div class="col-12">
                <div class="form-group">
                  <label>Content Three:-</label>
                  <input type="text" class="form-control contentthree" name="contentthree" value="{{ $service->contentthree }}">
                </div>

            </div>
        </div>






        <div class="row">

            <div class="col-6">
                <div class="form-group">
                  <label>First Quility:-</label>
                  <input type="text" class="form-control" name="firstQuility" value="{{ $service->firstQuility }}">
                </div>

            </div>

            <div class="col-6">
                <div class="form-group">
                  <label>Second Quility:-</label>
                  <input type="text" class="form-control" name="secondQuility" value="{{ $service->secondQuility }}">
                </div>

            </div>
        </div>



        <div class="row">

            <div class="col-6">
                <div class="form-group">
                  <label>Third Quility:-</label>
                  <input type="text" class="form-control" name="thirdQuility" value="{{ $service->thirdQuility }}">
                </div>

            </div>


        </div>



      <div class="form-group">
        <label>Fourth Quility:</label>
        <input type="text" class="form-control text_three" name="FourthQuility" value="{{ $service->FourthQuility }}">
      </div>
      <div class="form-group">
        <label>Heading Four:</label>
        <input type="text" class="form-control text_three" name="headingfour" value="{{ $service->headingfour }}">
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
