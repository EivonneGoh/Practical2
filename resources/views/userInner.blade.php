<h1>This is a list of Users!</h1>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
</tr>
</thead>
<tbody>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->ID }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
        </tr>
    @endforeach
</tbody>
</table>

<span>
    {{$users-> links()}}
</span>

//mishanlding of style
<style>
.w-5{
    display:none
}
</style>