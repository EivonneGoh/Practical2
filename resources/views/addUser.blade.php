<h1>Add USER page! </h1>

<form action="addUser" method ="POST">
    @csrf
    <input type="text" name="name" placeholder="Name"> <br> <br>
    <input type="text" name ="email" placeholder="email"> <br> <br>
    <button type="submit"> Add User</button>
</form>