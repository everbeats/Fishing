
<form class="form-horizontal" role="form" method="POST" action="{{ url('/wallet/addTransactions/new') }}" enctype="multipart/form-data">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="form-group">
		<label class="col-md-4 control-label">Picture</label>
		<div class="col-md-6">
			<input type="file" name="picture" class="form-control" accept="image/*">
		</div>
									
	</div>
	<div class="form-group">
		<div class="col-md-6 col-md-offset-4">
			<button type="submit" class="btn btn-primary">Save</button>
		</div>
	</div>
</form>

  <div class="" style= "margin-right: 50px; margin-top: 5%;"> 
               
			   <div>
				   <p><a href="{{route('hook.create')}}" class="btn btn-danger" style="width: 90px;">เพิ่มสินค้า</a></p>
			   </div>
			   <br/> <br/> 
			   <div>
				   <p><a href="{{url('/work2_index_rod')}}" class="btn btn-info" style="width: 90px;" >คันเบ็ด</a></p>
				   <p><a href="{{url('/work2_index_reel')}}" class="btn btn-info" style="width: 90px;">รอก</a></p>
				   <p><a href="{{url('/work2_index_line')}}" class="btn btn-info" style="width: 90px;">สาย</a></p>
				   <p><a href="{{url('/work2_index_hook')}}" class="btn btn-success" style="width: 90px;">ตะขอเบ็ด</a></p>
			   </div>
		 </div>

