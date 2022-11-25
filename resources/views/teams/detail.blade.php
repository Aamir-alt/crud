@extends("layouts.main")
@section("content")
<section class="main">

<div class="container">
<div class="inner">
    <h2>All info</h2>


    <table>
        <tr>

            <th>Id</th>
            <th>Name</th>
            <th>City</th>
            <th>Owner Name</th>

        </tr>

        <tr>
            <td>{{$datas["id"]}}</td>
            <td>{{$datas["team_name"]}}</td>
            <td>{{$datas["team_city"]}}</td>
            <td>{{$datas["team_owner"]}}</td>

          


        </tr>
    </table>
</div>
</div>
</section>
    @endsection