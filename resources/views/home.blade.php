@extends('layouts.main')
@section('login-form')
    <!-- content start here  -->
<div class="table-content" >
				
    <form action="{{ route('login.data') }}" method="post">
        @csrf
        <!-- login table starts here -->
        <table class="logintable">
            <tr>
                <td></td>
                <td class="log">Login</td>
            </tr>
            
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"  />
                    @if ($errors->has('username'))
                    <div>{{ $errors->first('username') }}</div>
                    @endif
                </td>
            </tr>
            
            <tr>
                <td>Password</td>
                <td><input type="password"  name="password"   />
                    @if ($errors->has('password'))
                    <div>{{ $errors->first('password') }}</div>
                    @endif
                </td>
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
