<x-header data="Users"/>
@if($user == "Alex")
<h1> Hello {{$user}} !</h1>
@elseif ($user=="John")
<h1> Hi {{$user}} !</h1>
@elseif($user=="Emma")
<h1> Bonjour {{$user}} !</h1>
@else
<h1>Unknown User</h1>
@endif
    @include('userInner')

@foreach($users as $user)
<h1>{{$user}}</h1>
@endforeach

<script>
    var data = @json($users);
    console.warn(data);
</script>

@csrf

