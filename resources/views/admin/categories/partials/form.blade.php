<div class="input-field">
	{{ Form::label('name', 'Categoría*')  }}
	{{ Form::text('name', null, ['id' => 'name']) }}
	@error ('name')
    	<span class="helper-text red-text title" data-error="wrong">{{ $message }}</span>
	@enderror
</div>

<div class="input-field">
	{{ Form::label('slug', 'URL*')  }}
	{{ Form::text('slug', null, ['id' => 'slug']) }}
	@error ('slug')
    	<span class="helper-text red-text title" data-error="wrong">{{ $message }}</span>
	@enderror
</div>

<div class="input-field">
	{{ Form::submit('Guardar', ['class' => 'btn btn-block orange']) }}
</div>


@section('scripts')
	<script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
	<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
	<script>
		$(document).ready(function(){
			$('#name, #slug').stringToSlug({
				callback: function(text){
					$('#slug').val(text);
				}
			});
		});
	</script>
@endsection