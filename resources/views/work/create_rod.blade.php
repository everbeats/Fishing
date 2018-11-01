@extends('lib.master')
@section('title','เพิ่มสินค้า')
@section('content')
<div class="container">
    <div class="card card-register mx-auto mt-5">
        <h5 class="card-header" align="center">เพิ่มสินค้า (คันเบ็ด)</h5>
        <div class="card-body">
            <form action="{{url('rod')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <div class="form-row">

                        <div class="col-md-6">
                            <label>Name</label>
                            <input class="form-control" name="rod_name" type="text" required=""><br>              
                        </div>

                        <div class="col-md-6">
                          <label>Length (feet)</label>
                          <input class="form-control" name="rod_length" type="number" required=""><br> 
                        </div>

                        <div class="col-md-6">
                          <label>Color</label>
                          <input class="form-control" name="rod_color" type="text" required=""><br> 
                        </div>

                        <div class="col-md-6">
                            <label>Type</label>
                            <select class="form-control" name="rod_type" type="text">
                                <option value=""></option>
                                <option value="spinning">Spinning Rod</option>
                                <option value="casting">Casting Rod</option>
                            </select><br>
                        </div>

                        <div class="col-md-6">
                            <label>Action</label>
                            <select class="form-control" name="rod_action" type="text">
                                <option value=""></option>
                                <option value="slow">Slow (S)</option>
                                <option value="moderete">Moderete (M)</option>
                                <option value="fast">Fast (F)</option>
                                <option value="extra-fast">Extra-Fast (E)</option>
                            </select><br>
                        </div>

                        <div class="col-md-6">
                            <label>Power</label>
                            <select class="form-control" name="rod_power" type="text">
                                <option value=""></option>
                                <option value="ultra-light">Ultra-Light (UL)</option>
                                <option value="light">Light (L)</option>
                                <option value="medium">Medium (M)</option>
                                <option value="medium-light">Medium-Light (ML)</option>
                                <option value="medium-heavy">Medium-Heavy (MH)</option>                                
                                <option value="heavy">Heavy (H)</option>
                                <option value="extra-heavy">Extra-Heavy (EH)</option>
                                <option value="ultra-heavy">Ultra-Heavy (UH)</option>                                
                            </select><br>
                        </div>

                        <div class="col-md-6">
                            <label>Line Weight (gram)</label>
                            <input class="form-control" name="rod_line" type="number" required=""><br> 
                        </div>

                        <div class="col-md-6">
                            <label>Lure Weight (gram)</label>
                            <input class="form-control" name="rod_lure" type="number" required=""><br> 
                        </div>

                        <div class="col-md-6">
                            <label>Brand</label>
                            <input class="form-control" name="rod_brand" type="text" required=""><br> 
                        </div>

                        <div class="col-md-6">
                            <label>Price (baht)</label>
                            <input class="form-control" name="rod_price" type="number" required=""><br> 
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