@extends("theme")

@section("content")
<div class="container">
<div class="row">

<div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
<form action="/update/{{$e->id}}" method="post">
{{ csrf_field() }}
<table class="table">
<tr>
    <td>NAME</td>
    <td><input value="{{$e->ename}}" type="text" class="form-control" name="ename"></td>
</tr>
<tr>
    <td>EMP CODE</td>
    <td><input value="{{$e->ecode}}" type="text" class="form-control" name="ecode"></td>
</tr>
<tr>
    <td>DESIGNATION</td>
    <td><input value="{{$e->edes}}" type="text" class="form-control" name="edes"></td>
</tr>
<tr>
    <td>SALARY</td>
    <td><input value="{{$e->esal}}" type="text" class="form-control" name="esal"></td>
</tr>
<tr>
    <td>COMPANY</td>
    <td><input value="{{$e->ecom}}" type="text" class="form-control" name="ecom"></td>
</tr>
<tr>
    <td></td>
    <td><button class="btn btn-warning">EDIT</button></td>
    <td></td>
</tr>
</table>
</form>
</div>

</div>
</div>
@endsection