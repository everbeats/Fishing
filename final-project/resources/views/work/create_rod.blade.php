@extends('work2.master')
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
                                <option value="Spinning Rod">Spinning Rod</option>
                                <option value="Casting Rod">Casting Rod</option>
                            </select><br>
                        </div>

                        <div class="col-md-6">
                            <label>Action</label>
                            <select class="form-control" name="rod_action" type="text">
                                <option value=""></option>
                                <option value="Slow (S)">Slow (S)</option>
                                <option value="Moderete (M)">Moderete (M)</option>
                                <option value="Fast (F)">Fast (F)</option>
                                <option value="Extra-Fast (E)">Extra-Fast (E)</option>
                            </select><br>
                        </div>

                        <div class="col-md-6">
                            <label>Power</label>
                            <select class="form-control" name="rod_power" type="text">
                                <option value=""></option>
                                <option value="Ultra-Light (UL)">Ultra-Light (UL)</option>
                                <option value="Light (L)">Light (L)</option>
                                <option value="medium">Medium (M)</option>
                                <option value="Medium-Light (ML)">Medium-Light (ML)</option>
                                <option value="Medium-Heavy (MH)">Medium-Heavy (MH)</option>                                
                                <option value="Heavy (H)">Heavy (H)</option>
                                <option value="Extra-Heavy (EH)">Extra-Heavy (EH)</option>
                                <option value="Ultra-Heavy (UH)">Ultra-Heavy (UH)</option>                                
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
                <form class="enter_form">
                    <input class="btn btn-primary btn-block" type="submit" value="submit">  
                </form>
            </form>        
        </div>
    </div>
</div>


@stop