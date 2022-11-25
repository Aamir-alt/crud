@extends("layouts.main")
@section("content")
<section class="main">
    <div class="container">

        <div class="inner">
            <h2>Add Players</h2>

            <form action="/player/edit" method="POST" enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="id" value="{{$datas['id']}}">

                <div>
                    <label for="">Name:</label>
                    <input type="text" name="name" value="{{$datas['name']}}">
                </div>

                <div>
                    <label for="">Email:</label>
                    <input type="email" name="email" value="{{$datas['email']}}">
                </div>
                <div>
                    <label for="">Address:</label>
                    <input type="text" name="address" value="{{$datas['address']}}">
                </div>

                <div> <label for="">Role:</label>


                    <input type="text" name="role" value="{{$datas['role']}}">

                </div>

                <div> <label for="">Image:</label>
                    
                    <input type="file" name="image" value="">
                </div>
                <button type="submit" class="btn"> Update</button>

            </form>
        </div>
    </div>
</section>                                                                                                                                                                                  
@endsection