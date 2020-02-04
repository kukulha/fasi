{{ Form::hidden('user_id', auth()->user()->id) }}
<div class="input-field">
	{{ Form::label('name', 'Titulo*')  }}
	{{ Form::text('name', null, ['id' => 'name']) }}
</div>

<div class="input-field">
	{{ Form::label('slug', 'URL*')  }}
	{{ Form::text('slug', null, ['id' => 'slug']) }}
</div>

<div class="input-field">
	{{ Form::label('excerpt', 'Extracto*') }}
	{{ Form::text('excerpt', null) }}
</div>

<div class="input-field">
	{{ Form::select('category_id', $categories) }}
	<label>Categorías</label>
</div>

<div class="file-field input-field">
	<a href="">
		{{ Form::file('file', null, ['id' => 'file']) }}
	</a>

	@if($post->file ?? '')
		<img src="{{ Storage::url($post->file) }}" class="responsive-img" alt="">
	@else
		<img src="https://via.placeholder.com/1200x400" class="responsive-img" alt="">
	@endif
</div>

<div class="input-field">
	{{ Form::textarea('body', null, ['id' => 'body']) }}
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

			ClassicEditor
    			.create( document.querySelector( '#body' ) )
    			.then( editor => {
        			console.log( editor );
    			} )
    			.catch( error => {
        			console.error( error );
    			} ); 
		});
	</script>
@endsection