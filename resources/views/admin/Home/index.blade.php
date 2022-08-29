@extends('admin.layout.master')
@section('main_content')
<div class="bd-example my-5">
<h4>Home Update</h4>
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
    <form  action="{{ route('admin.homeUpdate') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label>First Backgorund Image:-</label>
                    <input type="file" class="form-control bg_one" name="bg_one" >
                    <img src="{{ asset('upload/background/'.$home->bg_one)}}" alt="" style="width:200px; height:200px;">
                  </div>

            </div>
            <div class="col-6">
                <div class="form-group">
                    <label>First Heading:-</label>
                    <input type="text" class="form-control headingone-one" name="headingone" value="{{ $home->headingone }}">
                  </div>
            </div>
        </div>


        <div class="row">
            <div class="col-6">
                <div class="form-group">
                  <label>Heading Two:-</label>
                  <input type="text" class="form-control headingtwo" name="headingtwo" value="{{ $home->headingtwo }}">
                </div>

            </div>
            <div class="col-6">
                <div class="form-group">
                  <label>Second Background Image:-</label>
                  <input type="file" class="form-control bg_two" name="bg_two">
                  <img src="{{ asset('upload/background/'.$home->bg_two)}}" alt="" style="width:200px; height:200px;">
                </div>

            </div>
        </div>



        <div class="row">
            <div class="col-6">
                <div class="form-group">
                  <label>Thrird Background Image:-</label>
                  <input type="file" class="form-control bg_three" name="bg_three">
                  <img src="{{ asset('upload/background/'.$home->bg_three)}}" alt="" style="width:200px; height:200px;">
                </div>

            </div>
            <div class="col-6">
                <div class="form-group">
                  <label>First Counting:-</label>
                  <input type="text" class="form-control countingone" name="countingone" value="{{ $home->countingone }}">
                </div>

            </div>
        </div>




        <div class="row">
            <div class="col-6">
                <div class="form-group">
                  <label>Second Counting:-</label>
                  <input type="text" class="form-control countingtwo" name="countingtwo" value="{{ $home->countingtwo }}">
                </div>

            </div>
            <div class="col-6">
                <div class="form-group">
                  <label>Third Counting:-</label>
                  <input type="text" class="form-control countingthree" name="countingthree" value="{{ $home->countingthree }}">
                </div>

            </div>
        </div>



        <div class="row">
            <div class="col-6">
                <div class="form-group">
                  <label>Fourth Counting:-</label>
                  <input type="text" class="form-control countingfour" name="countingfour" value="{{ $home->countingfour }}">
                </div>

            </div>
            <div class="col-6">
                <div class="form-group">
                  <label>Heading Three:-</label>
                  <input type="text" class="form-control headingthree" name="headingthree" value="{{ $home->headingthree }}">
                </div>

            </div>
        </div>






        <div class="row">

            <div class="col-6">
                <div class="form-group">
                  <label>Heading Four:-</label>
                  <input type="text" class="form-control headingfour" name="headingfour" value="{{ $home->headingfour }}">
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                  <label>First Content:-</label>
                  <input type="text" class="form-control text_one" name="text_one" value="{{ $home->text_one }}">
                </div>

            </div>
        </div>



        <div class="row">

            <div class="col-6">
                <div class="form-group">
                  <label>Heading Five:-</label>
                  <input type="text" class="form-control headingfive" name="headingfive" value="{{ $home->headingfive }}">
                </div>

            </div>
        </div>


        <div class="row">
            <div class="col-12">

                <div class="form-group">
                  <label>Second Content:-</label>
                  <input type="text" class="form-control text_two" name="text_two" value="{{ $home->text_two }}">
                </div>
            </div>
        </div>






      <div class="form-group">
        <label>Third Content:-</label>
        <input type="text" class="form-control text_three" name="text_three" value="{{ $home->text_three }}">
      </div>




      <div class="form-group">
        <label>Content Fourth:-</label>
        <input type="text" class="form-control text_four" name="text_four" value="{{ $home->text_four }}">
      </div>

       <div class="row">
        <div class="col-6">
            <div class="form-group">
              <label>Heading Six:-</label>
              <input type="text" class="form-control headingsix" name="headingsix" value="{{ $home->headingsix }}">
            </div>

        </div>
        <div class="col-6">
            <div class="form-group">
              <label>Heading Seven:-</label>
              <input type="text" class="form-control headingseven" name="headingseven" value="{{ $home->headingseven }}">
            </div>

        </div>
       </div>


    <div class="row">
        <div class="col-6">
            <div class="form-group">
              <label>Heading Eight:-</label>
              <input type="text" class="form-control headingeight" name="headingeight" value="{{ $home->headingeight }}">
            </div>

        </div>
        <div class="col-6">
            <div class="form-group">
              <label>Heading Nine:-</label>
              <input type="text" class="form-control headingnine" name="headingnine" value="{{ $home->headingnine }}">
            </div>

        </div>

    </div>



<div class="row">
    <div class="col-6">
        <div class="form-group">
          <label>Heading Ten:-</label>
          <input type="text" class="form-control headingten" name="headingten" value="{{ $home->headingten }}">
        </div>

    </div>
    <div class="col-6">
        <div class="form-group">
          <label>Heading Eleven:-</label>
          <input type="text" class="form-control headingeleven" name="headingeleven" value="{{ $home->headingeleven }}">
        </div>

    </div>
</div>



      <div class="form-group">
        <label>Content Five:-</label>
        <input type="text" class="form-control text_five" name="text_five" value="{{ $home->text_five }}">
      </div>


      <div class="form-group">
        <label>Content six:-</label>
        <input type="text" class="form-control text_six" name="text_six" value="{{ $home->text_six }}">
      </div>



      <div class="form-group">
        <label>Text Seven:-</label>
        <input type="text" class="form-control text_seven" name="text_seven" value="{{ $home->text_seven }}">
      </div>

      <div class="form-group">
        <label>Text Eight:-</label>
        <input type="text" class="form-control" name="text_eight" value="{{ $home->text_eight }}">
      </div>



    <div class="row">
        <div class="col-6">
            <div class="form-group">
              <label>Fourth Background Image:-</label>
              <input type="file" class="form-control bg_four" name="bg_four">
              <img src="{{ asset('upload/background/'.$home->bg_four)}}" alt="" style="width:200px; height:200px;">
            </div>

        </div>
        <div class="col-6">
            <div class="form-group">
              <label>Heading Thirteen:-</label>
              <input type="text" class="form-control headingthirteen" name="headingthirteen" value="{{ $home->headingthirteen }}">
            </div>

        </div>
    </div>


    <div class="row">
        <div class="col-6">
            <div class="form-group">
              <label>Heading Fourteen:-</label>
              <input type="text" class="form-control headingfourteen" name="headingfourteen" value="{{ $home->headingfourteen }}">
            </div>

        </div>
        <div class="col-6">
            <div class="form-group">
              <label>Heading Fifteen:-</label>
              <input type="text" class="form-control headingfifteen" name="headingfifteen" value="{{ $home->headingfifteen }}">
            </div>

        </div>
    </div>


    <div class="row">
        <div class="col-6">
            <div class="form-group">
              <label>Heading Sixteen:-</label>
              <input type="text" class="form-control heading_sixteen" name="heading_sixteen" value="{{ $home->heading_sixteen }}">
            </div>

        </div>
        <div class="col-6">
            <div class="form-group">
              <label>Heading Seventeen:-</label>
              <input type="text" class="form-control headingseventeen" name="headingseventeen" value="{{ $home->headingseventeen }}">
            </div>

        </div>
    </div>


    <div class="row">
        <div class="col-6">
            <div class="form-group">
              <label>Heading Eighteen:-</label>
              <input type="text" class="form-control headingeighteen" name="headingeighteen" value="{{ $home->headingeighteen }}">
            </div>

        </div>
        <div class="col-6">
            <div class="form-group">
              <label>Fifth Background Image:-</label>
              <input type="file" class="form-control bg_five" name="bg_five">
              <img src="{{ asset('upload/background/'.$home->bg_five)}}" alt="" style="width:200px; height:200px;">
            </div>

        </div>
    </div>
<div class="row">
    <div class="col-6">
        <div class="form-group">
          <label>Heading Nineteen:-</label>
          <input type="text" class="form-control headingnineteen" name="headingnineteen" value="{{ $home->headingnineteen }}">
        </div>

    </div>
    <div class="col-6">
        <div class="form-group">
          <label>Background Six:-</label>
          <input type="file" class="form-control bg_six" name="bg_six">
          <img src="{{ asset('upload/background/'.$home->bg_six)}}" alt="" style="width:200px; height:200px;">
        </div>

    </div>
</div>

      <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label>Heading Twenty:-</label>
                <input type="text" class="form-control heafingTwenty" name="heafingTwenty" value="{{ $home->heafingTwenty }}">
              </div>
        </div>


        <div class="col-6">
            <div class="form-group">
                <label>Image One:-</label>
                <input type="file" class="form-control heafingTwenty" name="imageone" value="{{ $home->imageone }}">
                <img src="{{ asset('upload/background/'.$home->imageone)}}"style="width:200px; height:200px;">
              </div>
        </div>
      </div>








      <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label>Image Two:-</label>
                <input type="file" class="form-control heafingTwenty" name="imagetwo" value="{{ $home->imagetwo }}">
                <img src="{{ asset('upload/background/'.$home->imagetwo)}}"      style="width:200px; height:200px;">
              </div>
        </div>


        <div class="col-6">
            <div class="form-group">
                <label>Image Three:-</label>
                <input type="file" class="form-control heafingTwenty" name="imagethree" value="{{ $home->imagethree }}">
                <img src="{{ asset('upload/background/'.$home->imagethree)}}"style="width:200px; height:200px;">
              </div>
        </div>
      </div>




      <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label>Image Four:-</label>
                <input type="file" class="form-control heafingTwenty" name="imagefour" value="{{ $home->imagefour }}">
                <img src="{{ asset('upload/background/'.$home->imagefour)}}"      style="width:200px; height:200px;">
              </div>
        </div>



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
