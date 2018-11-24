@extends('work2.master')
@section('title','แก้ไขเพิ่มสินค้า')
@section('content')
<div class="container">
    <div class="card card-register mx-auto mt-5">
        <h5 class="card-header" align="center">แก้ไขสินค้า (รอก)</h5>
        <div class="card-body">
            <form action="{{action('ReelsController@update',$id)}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <div class="form-row">

                        <div class="col-md-6">
                            <label>Name</label>
                            <input class="form-control" name="reel_name" type="text" required="" value="{{$reel->reel_name}}"><br>              
                        </div>

                        <div class="col-md-6">
                          <label>size</label>
                          <input class="form-control" name="reel_size" type="number" required="" value="{{$reel->reel_size}}"><br> 
                        </div>

                        <div class="col-md-6">
                          <label>Color</label>
                          <input class="form-control" name="reel_color" type="text" required="" value="{{$reel->reel_color}}"><br> 
                        </div>

                        <div class="col-md-6">
                            <label>Type</label>
                            <select class="form-control" name="reel_type" type="text">
                                <option value="{{$reel->reel_type}}">{{$reel->reel_type}}</option>
                                <option value="spinning">Spinning Reel</option>
                                <option value="casting">Casting Reel</option>
                            </select><br>
                        </div>

                        <div class="col-md-6">
                            <label>Brand</label>
                            <input class="form-control" name="reel_brand" type="text" required="" value="{{$reel->reel_brand}}"><br> 
                        </div>

                        <div class="col-md-6">
                            <label>Price (baht)</label>
                            <input class="form-control" name="reel_price" type="number" required="" value="{{$reel->reel_price}}"><br> 
                        </div>

                        <!-- <div class="col-md-5">
                            <label>Picture : </label>
                            <input name="rod_img" type="file">
	                        <input class="btn btn-success" name="#" type="submit" value="upload">
                        </div> -->

                    </div>
                </div>
                <input class="btn btn-primary btn-block" type="submit" value="อัพเดท">  
                <input type="hidden" name="_method" value="PATCH" >
            </form>        
        </div>
    </div>
</div>

@stop