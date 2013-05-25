@layout('master')

@section('container')
	<h1>Here is your short url!</h1>
	{{ HTML::link($shortened, "url.dev/$shortened") }}
	{{ HTML::link('/', "Back to the home page.")}}
@endsection