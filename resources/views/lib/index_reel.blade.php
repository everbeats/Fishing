@extends('lib.master')
@section('title','รอก')
@section('content')
<div class="container">
<div class="row">
  <div class="" style= "margin-right: 50px; margin-top: 5%;"> 
               
        <div>
            <p><a href="{{route('reel.create')}}" class="btn btn-danger" style="width: 90px;">เพิ่มสินค้า</a></p>
        </div>
        <br/> <br/> 
        <div>
            <p><a href="{{url('/lib_index_rod')}}" class="btn btn-info" style="width: 90px;" >คันเบ็ด</a></p>
            <p><a href="{{url('/lib_index_line')}}" class="btn btn-info" style="width: 90px;">สาย</a></p>
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
                use App\Models\Fishing_reel;
                $fishing_reels = Fishing_reel::all()->toArray();            
            ?>

            @foreach($fishing_reels as $row)
            <tr>
                <td>{{$row['reel_name']}}</td>
                <td align="center">{{$row['reel_size']}}</td>
                <td>{{$row['reel_color']}}</td>
                <td>{{$row['reel_type']}}</td>
                <td>{{$row['reel_brand']}}</td>
                <td>{{$row['reel_price']}}</td>
                <td></td>
                <td></td>
            </tr>
            @endforeach

        </table>
      </div>
    </div>
</div>





      
@stop
  