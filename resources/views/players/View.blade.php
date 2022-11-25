@extends("layouts.main")
@section("content")

<!-- {{$datas}} -->

<section class="main">

    <div class="container">
        <div class="inner">

            <a href="{{url('/player/create')}}" class="btn">Add new Player</a>

            <h2>All Player Lists</h2>


            <table>
                <thead>
                    <tr>

                        <th>Id</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>View</th>
                        <th>Edit</th>
                       <th> Delete</th>


                    </tr>
                </thead>
                @foreach($datas as $item)
                <tbody>
                    <tr>

                        <td>{{$item["id"]}}</td>
                        <td>{{$item["name"]}}</td>
                        <td><img src="/images/{{$item['Image']}}" width="100px" height="75px"></td>
                        <td>
                            <a href="{{url('/player/'. $item->id .'/detail')}}" class="btn">View</a>


                        </td>
                        <td>
                            <a href="{{url('/player/'. $item->id .'/edit')}}" class="btn">Edit</a>
                        </td>
                        <td> <a href="{{url('/player/'. $item->id .'/delete')}}" class="btn" onclick="return confirm('Are you sure?')">Delete</a>
                        </td>

                    </tr>
                    </thead>
                    @endforeach
            </table>
     <div> 
              {{$datas->links()}}

     </div>
        </div>
    </div>
</section>
@endsection
