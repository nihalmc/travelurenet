@extends('layouts.admin')

@section('content')

<h1>Add Kalari Package Type</h1>
 <script  src="{{ asset('admin/ckeditor/ckeditor.js') }}" > </script>
<form action="{{ route('kalaripackagestype.submit') }}" method="post" enctype="multipart/form-data" >
    @csrf
<div class="form-group row">

    <div class ="col-md-2">
            Kalari Package Type Title
    </div>
    <div class = "col-md-4">
     <input type="Text" class="form-control" name ="package_type">
    </div>

</div>

<div class ="form-group row">
    <div class="col-md-2">
    Image
    </div>
    Image diemension should be 400x400 pixels
    <div class="col-md-4">
        <input type="file" class="form-control" name="image" >
    </div>

</div>

<div class="form-group row">

<div class="col-md-2">
Text
</div>

<div class="col-md-8">


 	<textarea name="text"></textarea>

</div>
</div>


<div class="form-group row">

    <div class ="col-md-2">
           Order number
    </div>
    <div class = "col-md-4">
     <input type="Text" class="form-control" name ="ordernumber">
    </div>

</div>

<div class="form-group">

    <div class="col-md-2">

    </div>
    <div class="col-md-2">
   <button type="submit" class="btn btn-primary"> SAVE  </button>

    </div>
</div>





</form>
<script>

  CKEDITOR.replace( 'text' );


</script>
</div>
<br/>


<h3>List Kalari Package Types </h3>
<div class="row" style="margin-top:20px;">
  <table id="mlist" class="table table-bordered table-striped table-condensed" cellspacing="0" width="100%">
<thead>
                <tr>


                 <th>Kalari Package Type Title</th>
                  <th>Image</th>
                   <th>Text</th>
                   <th>Order number</th>

                <th>Edit</th>


                </tr>
        </thead>

        <tbody>

            @foreach($package_types as $cat)
                <tr>
                    <td>{{ $cat->package_type }}</td>
                    <td><img src="{{ asset('storage/' . $cat->image) }}" height="100px" width="100px" alt="" /></td>
                    <td>{{ $cat->text }}{{ strip_tags($cat->text , '<a><strong><em><u><s><br><div>') }}</td>
                    <td>{{ $cat->ordernumber }}</td>
                    <td><a href="{{ route('kalariPackage_type.edit' , $cat->id) }}">Edit</a></td>
                </tr>
            @endforeach




            </tbody>

            </table>

    </div>
    @endsection


