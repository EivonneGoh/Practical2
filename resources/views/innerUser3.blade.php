<h1> UPDATE User</h1>
    <table border="1">
    <thead>
</thead>
<tbody>
    @foreach($users as $user)
    <tr>
        <td>{{$user-> ID}}</td>
        <td>{{$user -> name}}</td>
        <td> {{$user-> email}}</td>
        <td>
            <a href={{ "updateUser/".$user['ID'] }}> Edit </a>
</td>
</tr>
@endforeach
</tbody>
</table>

<span>
    {{$users-> links()}}
</span>

<style>
    .w-5{
        display:none


    }
    </style>