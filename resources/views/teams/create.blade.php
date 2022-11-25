@extends("layouts.main")
@section("content")
<section class="main">

<div class="container">
<div class="inner">

<h2>Add new team</h2>

<form action="/team/save" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="">Team Name:</label>
        <input type="text" name="name">
    </div>

    <div>
        <label for="">Team City:</label>
        <input type="text" name="city">
    </div>
    <div>
        <label for="">Teams owner:</label>
        <input type="text" name="owner">
    </div>
    <!-- <div>
        <label for="">Image</label>
        <input type="file" name="image"><br /><br />
    </div> -->
    

    <!-- <input type="file" name="image"><br><br> -->
    <button type="submit" class="btn"> Save Data</button>

</form>
</div>
</div>
</section>

@endsection