<form action="signUp" method="POST">
    @csrf
    <input type="text" name ="name" placeholder="Enter Name"> <br><br>
    <input type="text" name ="email" placeholder="Enter Email"> <br><br>
    <input type="password" name ="password" placeholder="Enter Password"> <br><br>
    <input type="hidden" name ="is_admin" value="p"> <br><br>

    <button type="submit"> Sign Up</button>

</form>