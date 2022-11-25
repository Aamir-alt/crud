@extends("layouts.main")
@section("content")

{{$datas}}
<section class="main">

    <div class="container">

        <div class="inner">
            <h2>Detail page</h2>


            <table>
                <th>
                    <tr>

                        <th>Id</th>
                        <th>Name</th>
                        <th>Image</th>

                        <th>Email</th>
                        <th>Address</th>
                        <th>Role</th>
                       
                    </tr>
                </th>
                <tr>

                <td> {{$datas["id"]}} </td>
                    <td> {{$datas["name"]}} </td>
                    <td><img src="/images/{{$datas['Image']}}" width="100px" height="75px"></td>
                    <!-- <td><img src="/images/{{$datas['Image']}}" width="100px" height="75px"></td> -->

                    <td> {{$datas["email"]}} </td>
                    <td> {{$datas["address"]}} </td>
                    <td> {{$datas["role"]}} </td>
                    

                </tr>
            </table>
            @endsection
        </div>
    </div>
</section>