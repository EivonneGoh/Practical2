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
            <a href={{ "deleteUser/".$user['ID'] }}> Delete </a>
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