@extends('master')
@section('container')
<div class="panel panel_info">
<div class="panel-heading">
	<strong><a href="{{url('matakuliah')}}">
	<i style="color: white;" class="fa text-default fa-chevron-left"></i>Perbaruhi Data Matakuliah</a>
	</strong>
</div>
	{!! Form::model($matakuliah,['url'=>'matakuliah/edit/'.$matakuliah->id,'class'=>'form-horizontal'])!! }
	@include('matakuliah.form')
	<div style="width: 100px;text-align: right;">
		<button class="btn btn-info"><i class="fa fa-save"></i>Perbaruhi</button>
		<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
	</div>	
{!! Form::close()!!}
</div>
@stop