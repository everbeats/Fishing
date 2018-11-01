@extends('lib.master')
@section('title','เพิ่มสินค้า')
@section('content')
<div class="container">
    <div class="card card-register mx-auto mt-5">
        <h5 class="card-header" align="center">เพิ่มสินค้า (สาย)</h5>
        <div class="card-body">
            <form action="{{url('line')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <div class="form-row">

                        <div class="col-md-6">
                            <label>Name</label>
                            <input class="form-control" name="line_name" type="text" required=""><br>              
                        </div>

                        <div class="col-md-6">
                          <label>size (lb)</label>
                          <input class="form-control" name="line_size" type="number" required=""><br> 
                        </div>

                        <div class="col-md-6">
                          <label>Color</label>
                          <input class="form-control" name="line_color" type="text" required=""><br> 
                        </div>

                        <div class="col-md-6">
                            <label>Type</label>
                            <select class="form-control" name="line_type" type="text">
                                <option value=""></option>
                                <option value="monofilament">Monofilament</option>
                                <option value="pe">PE</option>
                            </select><br>
                        </div>

                        <div class="col-md-6">
                            <label>Brand</label>
                            <input class="form-control" name="line_brand" type="text" required=""><br> 
                        </div>

                        <div class="col-md-6">
                            <label>Price (baht)</label>
                            <input class="form-control" name="line_price" type="number" required=""><br> 
                        </div>

                        <!-- <div class="col-md-5">
                            <label>Picture : </label>
                            <input name="rod_img" type="file">
	                        <input class="btn btn-success" name="#" type="submit" value="upload">
                        </div> -->

                    </div>
                </div>
                <input onclick="myFunction()" class="btn btn-primary btn-block" type="submit" value="submit">  
            </form>        
        </div>
    </div>
</div>
<script>
function myFunction() {
    var txt;
    if (confirm("ยืนยัน การเพิ่มสินค้า!")) {
        txt = "ตกลง!";
    } else {
        txt = "ยกเลิก";
    }
    document.getElementById("demo").innerHTML = txt;
}
</script>
@stop