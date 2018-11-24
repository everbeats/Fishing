@extends('work2.master')
@section('title','แก้ไขสินค้า')
@section('content')
<div class="container">
    <div class="card card-register mx-auto mt-5">
        <h5 class="card-header" align="center">แก้ไขสินค้า (ตะขอเบ็ด)</h5>
        <div class="card-body">
            <form action="{{action('HooksController@update',$id)}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <div class="form-row">

                        <div class="col-md-6">
                            <label>Name</label>
                            <input class="form-control" name="hook_name" type="text" required="" value="{{$hook->hook_name}}"><br>              
                        </div>

                        <div class="col-md-6">
                          <label>size</label>
                          <input class="form-control" name="hook_size" type="number" required="" value="{{$hook->hook_size}}"><br> 
                        </div>

                        <div class="col-md-6">
                          <label>Color</label>
                          <select class="form-control" name="hook_color" type="text">
                                <option value="{{$hook->hook_color}}">{{$hook->hook_color}}</option>
                                <option value="Black">Black</option>
                                <option value="Silver">Silver</option>
                                <option value="Gold">Gold</option>
                            </select><br>
                        </div>

                        <div class="col-md-6">
                            <label>Type</label>
                            <select class="form-control" name="hook_type" type="text">
                                <option value="{{$hook->hook_type}}">{{$hook->hook_type}}</option>
                                <option value="Single Hook">Single Hook</option>
                                <option value="Double Hook">Double Hook</option>
                                <option value="Triple Hook">Triple Hook</option>
                            </select><br>
                        </div>

                        <div class="col-md-6">
                            <label>Brand</label>
                            <input class="form-control" name="hook_brand" type="text" required="" value="{{$hook->hook_brand}}"><br> 
                        </div>

                        <div class="col-md-6">
                            <label>Price (baht)</label>
                            <input class="form-control" name="hook_price" type="number" required="" value="{{$hook->hook_price}}"><br> 
                        </div>

                        <!-- <div class="col-md-5">
                            <label>Picture : </label>
                            <input name="rod_img" type="file">
	                        <input class="btn btn-success" name="#" type="submit" value="upload">
                        </div> -->

                    </div>
                </div>
                <input class="btn btn-primary btn-block" type="submit" value="submit"> 
                <input type="hidden" name="_method" value="PATCH" > 
            </form>        
        </div>
    </div>
</div>

@stop