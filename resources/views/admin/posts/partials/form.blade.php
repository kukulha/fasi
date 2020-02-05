{{ Form::hidden('user_id', auth()->user()->id) }}
<div class="input-field">
	{{ Form::label('name', 'Titulo*')  }}
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
	{{ Form::label('excerpt', 'Extracto*') }}
	{{ Form::text('excerpt', null) }}
	@error ('excerpt')
    	<span class="helper-text red-text title" data-error="wrong">{{ $message }}</span>
	@enderror
</div>

<div class="input-field">
	{{ Form::select('category_id', $categories) }}
	<label>Categorías</label>
	@error ('category_id')
    	<span class="helper-text red-text title" data-error="wrong">{{ $message }}</span>
	@enderror
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
	@error ('body')
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