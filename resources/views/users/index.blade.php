<h1>Show all cruds</h1>
<button><a href="{{ route('user.create') }}">Add New</a></button><br /><br /><br />


<table>
    <thead>
        <tr>
            <th>#</th>  
            <th>name</th>  
            <th>email</th> 
            <th>password</th>  
           
            <th>action</th>  
        </tr>
    </thead>
    <tbody>
        
        @foreach ($users as $user)
            <tr> 
                <td>{{  $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{  $user->email }}</td>
                <td>{{  $user->password }}</td>
             
               
                <td>
                    <a href="{{ route('user.show', $user->id) }}">View</a>
                    <a href="{{ route('user.edit',  $user->id) }}">Edit</a>

                    <form action="{{ route('user.destroy',  $user->id) }}" method="POST" >
                        @csrf
                        @method('DELETE') 
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr> 
        @endforeach 
    </tbody>
</table>