@extends('layouts.app')
@section('content')

<div class="container">

<form action="{{url('users/' .$data->id)}}" method="post" enctype="multipart/form_data">
@csrf
{{method_field('PATCH')}}

@include('form.form', ['type' => 'Edit'])

<br/>
<div class="d-grid gap-2">
<input class="btn btn-success" type="submit" value="Send">
</div>
<br/>
</form>
<br/>
<a class="btn btn-primary" href="{{url('users/')}}">Return</a>

</div>
@endsection