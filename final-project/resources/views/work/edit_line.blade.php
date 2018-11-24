@extends('work2.master')
@section('title','แก้ไขสินค้า')
@section('content')
<div class="container">
    <div class="card card-register mx-auto mt-5">
        <h5 class="card-header" align="center">แก้ไขสินค้า (สาย)</h5>
        <div class="card-body">
            <form action="{{action('LinesController@update',$id)}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label>Name</label>
                            <input class="form-control" name="line_name" type="text" required="" value="{{$line->line_name}}"><br>              
                        </div>

                        <div class="col-md-6">
                          <label>size (lb)</label>
                          <input class="form-control" name="line_size" type="number" required="" value="{{$line->line_size}}"><br> 
                        </div>

                        <div class="col-md-6">
                          <label>Color</label>
                          <input class="form-control" name="line_color" type="text" required="" value="{{$line->line_color}}"><br> 
                        </div>

                        <div class="col-md-6">
                            <label>Type</label>
                            <select class="form-control" name="line_type" type="text">
                                <option value="{{$line->line_type}}">{{$line->line_type}}</option>
                                <option value="Monofilament">Monofilament</option>
                                <option value="PE">PE</option>
                            </select><br>
                        </div>

                        <div class="col-md-6">
                            <label>Brand</label>
                            <input class="form-control" name="line_brand" type="text" required="" value="{{$line->line_brand}}"><br> 
                        </div>

                        <div class="col-md-6">
                            <label>Price (baht)</label>
                            <input class="form-control" name="line_price" type="number" required="" value="{{$line->line_price}}"><br> 
                        </div>

                        <!-- <div class="col-md-5">
                            <label>Picture : </label>
                            <input name="rod_img" type="file">
	                        <input class="btn btn-success" name="#" type="submit" value="upload">
                        </div> -->

                    </div>
                </div>
                <input class="btn btn-primary btn-block" type="submit" value="อัพเดท" >  
                <input type="hidden" name="_method" value="PATCH" >
            </form>        
        </div>
    </div>
</div>

@stop