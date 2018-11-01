@extends('lib.master')
@section('title','หน้าแรก')
@section('content')
    <p><h2>Welcome</h2></p><br>
    <p><a href="{{route('work.create')}}" class="btn btn-info"> create_rod</a></p>
    <p><a href="{{route('work2.create')}}" class="btn btn-info">create_reel</a></p>
    <p><a href="{{route('work3.create')}}" class="btn btn-info">create_line</a></p>
    <div class="container">
    <div class="card card-register mx-auto mt-5">
        <h5 class="card-header" align="center">เพิ่มสินค้า (รอก)</h5>
        <div class="card-body">
            <form action="{{url('work')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <div class="form-row">

                        <div class="col-md-6">
                            <label>Name</label>
                            <input class="form-control" name="reel_name" type="text" required=""><br>              
                        </div>

                        <div class="col-md-6">
                          <label>size</label>
                          <input class="form-control" name="reel_size" type="number" required=""><br> 
                        </div>

                        <div class="col-md-6">
                          <label>Color</label>
                          <input class="form-control" name="reel_color" type="text" required=""><br> 
                        </div>

                        <div class="col-md-6">
                            <label>Type</label>
                            <select class="form-control" name="reel_type" type="text">
                                <option value=""></option>
                                <option value="spinning">Spinning Reel</option>
                                <option value="casting">Casting Reel</option>
                            </select><br>
                        </div>

                        <div class="col-md-6">
                            <label>Brand</label>
                            <input class="form-control" name="reel_brand" type="text" required=""><br> 
                        </div>

                        <div class="col-md-6">
                            <label>Price (baht)</label>
                            <input class="form-control" name="reel_price" type="number" required=""><br> 
                        </div>

                        <!-- <div class="col-md-5">
                            <label>Picture : </label>
                            <input name="rod_img" type="file">
	                        <input class="btn btn-success" name="#" type="submit" value="upload">
                        </div> -->

                    </div>
                </div>
                <input class="btn btn-primary btn-block" type="submit" value="submit">  
            </form>        
        </div>
    </div>
</div>
@stop

           @foreach($fishing_rods as $row)
            <tr>
                <td>{{$row['rod_name']}}</td>
                <td align="center">{{$row['rod_length']}}</td>
                <td>{{$row['rod_color']}}</td>
                <td>{{$row['rod_action']}}</td>
                <td>{{$row['rod_power']}}</td>
                <td align="center">{{$row['rod_line']}}</td>
                <td align="center">{{$row['rod_lure']}}</td>
                <td>{{$row['rod_type']}}</td>
                <td>{{$row['rod_brand']}}</td>
                <td>{{$row['rod_price']}}</td>
                <td></td>
                <td></td>
            </tr>
            @endforeach

  