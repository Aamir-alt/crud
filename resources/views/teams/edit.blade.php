@extends("layouts.main")
@section("content")
<section class="main">

<div class="container">
<div class="inner">

<h2>
    Edit page
</h2>

<!-- {{$datas}} -->

<form action="/team/edit" method="POST">
    @csrf
    

<div>
        <input type="hidden" name="id" value="{{$datas['id']}}"><br /><br />
    </div>

    
<div>
        <label for="">team Name:</label>
        <input type="text" name="name" value="{{$datas['team_name']}}"><br /><br />
    </div>


    <div>
        <label for="">city Name:</label>
        <input type="text" name="city" value="{{$datas['team_city']}}"><br /><br />
    </div>


    
    <div>
        <label for="">owner Name:</label>
        <input type="text" name="owner" value="{{$datas['team_owner']}}"><br /><br />
    </div>

    <button type="submit" class="btn"> update</button>

</form>
</div>
</div>
</section>
@endsection