@extends('lib.master')
@section('title','สาย')
@section('content')
<div class="container">
<div class="row">
  <div class="" style= "margin-right: 50px; margin-top: 5%;"> 
               
        <div>
            <p><a href="{{route('line.create')}}" class="btn btn-danger" style="width: 90px;">เพิ่มสินค้า</a></p>
        </div>
        <br/> <br/> 
        <div>
            <p><a href="{{url('/lib_index_rod')}}" class="btn btn-info" style="width: 90px;" >คันเบ็ด</a></p>
            <p><a href="{{url('/lib_index_reel')}}" class="btn btn-info" style="width: 90px;">รอก</a></p>
        </div>
  </div>

  <!-- /.col-lg-3 -->
<div class="contriner">
  <div class="col-lg-12" style="margin-top: 5%; margin-left: 15px;">
      <div class="row">
        <table class="table table-bordered table-striped">
            <tr>
                <th>Name</th>
                <th>Size</th>
                <th>color</th>
                <th>Type</th>
                <th>Brand</th>
                <th>Price</th>
                <th></th>
                <th></th>
            </tr>

            <?php  
                use App\Models\Fishing_line;
                $fishing_lines = Fishing_line::all()->toArray();            
            ?>

            @foreach($fishing_lines as $row)
            <tr>
                <td>{{$row['line_name']}}</td>
                <td align="center">{{$row['line_size']}}</td>
                <td>{{$row['line_color']}}</td>
                <td>{{$row['line_type']}}</td>
                <td>{{$row['line_brand']}}</td>
                <td>{{$row['line_price']}}</td>
                <td></td>
                <td></td>
            </tr>
            @endforeach

        </table>
      </div>
    </div>
</div>





      
@stop
  