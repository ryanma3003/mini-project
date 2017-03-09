<div id="search" style="padding: 10px;">
	{!! Form::open(['url' => 'college/search', 'method' => 'GET']) !!}
	<div class="input-group">
		{!! Form::text('keyword', (!empty($keyword)) ? $keyword : null, ['class' => 'form-control', 'placeholder' => 'Type College Name']) !!}
		<span class="input-group-btn">
			{!! Form::button('Search', ['class' => 'btn btn-default', 'type' =>'submit']) !!}
		</span>
	</div>
	{!! Form::close() !!}
</div>