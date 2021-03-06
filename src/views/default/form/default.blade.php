<div class="box">
	<form action="{{ $action }}" method="POST" @if($horizontal) class="form-horizontal" @endif>
		<div class="box-body">
			<input type="hidden" name="_token" value="{{ csrf_token() }}" />
			<input type="hidden" name="_redirectBack" value="{{ $backUrl }}" />
			@foreach ($items as $item)
				{!! $item !!}
			@endforeach
		</div>
		<div class="box-footer">

				<input type="submit" value="{{ trans('admin::lang.table.save') }}" class="btn btn-primary flat"/>
				<a href="{{ $backUrl }}" class="btn btn-default flat">{{ trans('admin::lang.table.cancel') }}</a>
			
		</div>
	</form>

	@if ( $ajax_validation )
	{!! $ajax_validation !!}
	@endif

</div>