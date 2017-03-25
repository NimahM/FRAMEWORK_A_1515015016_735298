@extends('master')
@section('container')
<div class="panel panel_info">
<div class="panel-heading">
	<strong><a href="{{url('ruangan')}}">
	<i style="color: white;" class="fa text-default fa-chevron-left"></i>Perbaruhi Data ruangan</a>
	</strong>
</div>
	{!! Form::model($ruangan,['url'=>'ruangan/edit/'.$ruangan->id,'class'=>'form-horizontal'])!! }
	@include('ruangan.form')
	<div style="width: 100px;text-align: right;">
		<button class="btn btn-info"><i class="fa fa-save"></i>Perbaruhi</button>
		<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
	</div>	
{!! Form::close()!!}
</div>
@stop