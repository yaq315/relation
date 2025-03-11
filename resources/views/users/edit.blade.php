<h2>form edit</h2>

<form action="{{ route('user.update', $users->id) }}" method="POST">
    @csrf
    @method('PUT') 

    <label>Name:</label>
    <input type="text" name="name" value="{{ $users->name }}" required>

    <label>Email:</label>
    <input type="email" name="email" value="{{$users->email }}" required>

    <label>password:</label>
    <input type="password" name="password" value="{{ $users->password }}" required>

    <label>phone:</label>
    <input type="text" name="phone_number" value="{{ $users->phone }}">
    <button type="submit">update</button>
</form>