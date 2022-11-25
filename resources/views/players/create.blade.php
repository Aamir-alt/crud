@extends("layouts.main")
@section("content")
<section class="main">

<div class="container">
<div class="inner">

            <h2>Add Players</h2>

            <form action="/player/save" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="">Name:</label>
                    <input type="text" name="name">
                </div>

                <div>
                    <label for="">Email:</label>
                    <input type="email" name="email">
                </div>
                <div>
                    <label for="">Address:</label>
                    <input type="text" name="address">
                </div>
                <div> <label for="">Role:</label>
                    <input type="text" name="role">

                </div>

                <div> <label for="">Image:</label>

                    <input type="file" name="image">

                </div>
                <button type="submit" class="btn"> Save Data</button>

            </form>
        </div>
    </div>
</section>
@endsection