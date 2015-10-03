{{ $message }}

<ol>

	@foreach($users as $user)
		<li>
			<ul>
				<li>Name: {{ $user->name }}</li>
				<li>Phone: {{ $user->phone }}</li>
				<li>Email: {{ $user->email }}</li>
				<li>Age: {{ $user->age }}</li>
			</ul>

		</li>

	@endforeach

</ol>