@extends('lib.master')
@section('title','คันเบ็ด')
@section('content')
<div class="container">
<div class="row">
  <div class="" style= "margin-right: 50px; margin-top: 5%;"> 
               
        <div>
            <p><a href="{{route('rod.create')}}" class="btn btn-danger" style="width: 90px;">เพิ่มสินค้า</a></p>
        </div>
        <br/> <br/> 
        <div>
            <p><a href="{{url('/lib_index_line')}}" class="btn btn-info" style="width: 90px;" >สาย</a></p>
            <p><a href="{{url('/lib_index_reel')}}" class="btn btn-info" style="width: 90px;">รอก</a></p>
        </div>

        <div>
            
        </div>
  </div>

  <!-- /.col-lg-3 -->
<div class="contriner">
  <div class="col-lg-12" style="margin-top: 5%; margin-left: 15px;">
      <div class="row">
        <table class="table table-bordered table-striped">
            <tr>
                <th>Name</th>
                <th>Length</th>
                <th>color</th>
                <th>Action</th>
                <th>Power</th>
                <th>Line Weight</th>
                <th>Lure Weight</th>
                <th>Type</th>
                <th>Brand</th>
                <th>Price</th>
                <th></th>
                <th></th>
            </tr>
            
          <?php  
            use App\Models\Fishing_rod;
            $fishing_rods = Fishing_rod::all()->toArray();            
          ?>
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

            

        </table>
      </div>
    </div>
</div>





      
@stop