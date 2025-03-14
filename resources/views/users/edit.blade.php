<h2>form edit</h2>

<form action="{{ route('user.update', $users->id) }}" method="POST">
    @csrf
    @method('PUT') 

    <label>Name:</label>
    <input type="text" name="name" value="{{old('name',$users->name) }}" required>

    <label>Email:</label>
    <input type="email" name="email" value="{{old('email',$users->email) }}" required>

    <label>password:</label>
    <input type="password" name="password" value="{{old('password',$users->password ) }}" required>

    <a href="{{ route('user.index') }}">Back to users List</a>
</form>