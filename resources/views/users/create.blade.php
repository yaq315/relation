
<h1> Create New crud </h1>

<form action="{{route('user.store')}}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="password">password:</label>
    <input type="password" id="password" name="password" required><br><br>
    
    <button type="submit">Submit</button>

</form>
