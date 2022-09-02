@extends('admin.layout.master')
@section('main_content')
<div class="bd-example my-5">
<h4>Footer Update</h4>
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
    <form  action="{{ route('admin.Footerupdate') }}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="form-group">
        <label>Content</label>
        <textarea type="text" class="form-control" name="content">
            {{ $footer->content }}
        </textarea>
      </div>


      <div class="form-group row">
        <div class="col-6">
        <label for="exampleFormControlInput1">Logo</label>
        <input type="file" class="form-control" name="logo">
        </div>
        <div class="col-6">

        <img src="{{ asset('upload/logo/footer/'.$footer->logo) }}" alt="image" style="width: 200px; height:200px;">
        </div>
      </div>



      <div class="form-group">
        <label for="exampleFormControlInput1">Facebook Link</label>
        <input type="text" class="form-control" name="Flink" value="{{ $footer->Flink }}">
      </div>


      <div class="form-group">
        <label >Twitter Link</label>
        <input type="text" class="form-control navfour" name="Tlink" value="{{ $footer->Tlink }}">
      </div>


      <div class="form-group">
        <label>Pinterest Link</label>
        <input type="text" class="form-control navfive" name="Plink" value="{{ $footer->Plink }}">
      </div>


      <div class="form-group">
        <label>About</label>
        <input type="text" class="form-control" name="pagelinkone" value="{{ $footer->pagelinkone }}" >
      </div>


      <div class="form-group">
        <label>Meet Our Team</label>
        <input type="text" class="form-control navseven" name="pagelinktwo" value="{{ $footer->pagelinktwo }}">
      </div>


      <div class="form-group">
        <label>Our Portfolio</label>
        <input type="text" class="form-control logo" name="pagelinkthree" value="{{ $footer->pagelinkthree }}">
      </div>



      <div class="form-group">
        <label>Latest News</label>
        <input type="text" class="form-control logo" name="pagelinkfour" value="{{ $footer->pagelinkfour }}">
      </div>


      <div class="form-group">
        <label>Contact</label>
        <input type="text" class="form-control logo" name="pagelinkfive" value="{{ $footer->pagelinkfive }}">
      </div>



      <div class="form-group">
        <label>Support</label>
        <input type="text" class="form-control logo" name="support" value="{{ $footer->support }}">
      </div>


      <div class="form-group">
        <label>Privacy Policy</label>
        <input type="text" class="form-control logo" name="privacypolicy" value="{{ $footer->privacypolicy }}">
      </div>



      <div class="form-group">
        <label>Terms of use</label>
        <input type="text" class="form-control logo" name="termsofuse" value="{{ $footer->termsofuse }}">
      </div>


      <div class="form-group">
        <label>Help</label>
        <input type="text" class="form-control logo" name="help" value="{{ $footer->help }}">
      </div>


      <div class="form-group">
        <label>Address</label>
        <input type="text" class="form-control logo" name="address" value="{{ $footer->address }}">
      </div>


      <div class="form-group">
        <label>Phone</label>
        <input type="text" class="form-control logo" name="phone" value="{{ $footer->phone }}">
      </div>



      <div class="form-group">
        <label>Email</label>
        <input type="text" class="form-control logo" name="email" value="{{ $footer->email }}">
      </div>



      <div class="form-group">
        <label>Signup Message</label>
        <textarea name="signup" id="signup" class="form-control">
            {{ $footer->signup }}
        </textarea>
      </div>



      <div class="form-group">
        <label>CopyRight Message</label>
        <textarea name="copyright" id="copyright" class="form-control">
            {{ $footer->copyright }}
        </textarea>
      </div>



      <div class="form-group">
        <label>Heading (Explore)</label>
        <input type="text" class="form-control logo" name="explore" value="{{ $footer->explore }}">
      </div>



      <div class="form-group">
        <label>Heading (Contact)</label>
        <input type="text" class="form-control logo" name="contactH" value="{{ $footer->contactH }}">
      </div>


      <div class="form-group">
        <label>Heading (Subscribe)</label>
        <input type="text" class="form-control logo" name="subscribeH" value="{{ $footer->subscribeH }}">
      </div>





      <input type="submit" value="Update" class="btn btn-primary my-2">
    </form>
    </div>

@endsection



@section('script')
<script>


</script>


@endsection
