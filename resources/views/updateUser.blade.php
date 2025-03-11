<h1>UPDATE User </h1>
<form action ="updateUser" method ="POST">
    @csrf
    <input type="hidden" name="ID" value="{{$data['ID']}}"> <br> <br>
    <input type="text" name="name" value="{{$data['name']}}"> <br> <br>
    <input type="text" name="email" value="{{$data['email']}}"> <br> <br>
    <button type="submit"> Update User </button>
</form>
