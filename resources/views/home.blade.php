@extends('layouts.main')
@section('login-form')
    <!-- content start here  -->
<div class="table-content" >
				
    <form method="post">
        <!-- login table starts here -->
        <table class="logintable">
            <tr>
                <td></td>
                <td class="log">Login</td>
            </tr>
            
            <tr>
                <td>Username</td>
                <td><input type="text" name="un"  /></td>
            </tr>
            
            <tr>
                <td>Password</td>
                <td><input type="password"  name="pw"   /></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="save" value="Login"  class="log-btn"/></td>
            </tr>
        </table>
        <!-- login table ends here -->
    </form>
</div>
<!-- content end here  -->
@endsection
