@extends("theme")

@section("content")

<div class="container">
<div class="row">
<div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
<table class="table">
<tr>
    <th>NAME</th>
    <th>EMP CODE</th>
    <th>DESIGNATION</th>
    <th>SALARY</th>
    <th>COMPANY</th>
</tr>

    @foreach($e as $i)
    <tr>
    <td>{{ $i->ename }}</td>
    <td>{{ $i->ecode }}</td>
    <td>{{ $i->edes }}</td>
    <td>{{ $i->esal }}</td>
    <td>{{ $i->ecom }}</td>
<td><a href="/emp/{{$i->id}}/edit">edit</a></td>
    </tr>
    @endforeach

</table>
</div>
</div>
</div>

@endsection