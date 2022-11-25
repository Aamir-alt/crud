@extends("layouts.main")
@section("content")
<section class="main">

<div class="container">
<div class="inner">

    <a href="{{url('/team/create')}}" class="btn">Add new team</a>

<h2>All team Lists</h2>


    <table>
        <tr>

            <th>Id</th>
            <th>Name</th>
            <th>City</th>
            <th>Owner Name</th>
            <th>Detail</th>
            <th>Edit</th>
            <th>Delete</th>



        </tr>

        @foreach($datas as $item)

        <tr>

            <td>{{$item["id"]}}</td>
            <td>{{$item["team_name"]}}</td>
            <td>{{$item["team_city"]}}</td>
            <td>{{$item["team_owner"]}}</td>
            <td>
                <a href="{{url('/team/'. $item->id .'/detail')}}" class="btn">detail</a>

            </td>

            <td>
                <a href="{{url('/team/'. $item->id .'/edit')}}" class="btn">Edit</a>
            </td>
            <td> <a href="{{url('/team/'. $item->id .'/delete')}}" class="btn" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
</div>
</section>

@endsection