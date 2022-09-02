<style>
    .toaster{
    position: absolute;
    left: 97rem;
    top: 4rem;
    /* width: 300px; */
    /* height: 100px; */
    z-index: 999999;
    }
</style>
@if (Session::has("success"))
<div class="alert alert-success text-center toaster">
    {!! Session::get('success')  !!}
</div>
@endif
