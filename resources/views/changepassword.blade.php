@extends('layouts.main')

<!-- change password section starts -->
@section('change-password-section')

<!-- leftlist attached here -->
@include('layouts/leftlist')

<!-- content2 start here -->
<div class="content2">

    <!-- error handling cahnge password time -->
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif

    <h4>Change Password</h4>

    <!-- add-conatiner start here -->
    <div class="add-container">
        <div class="add-line">Change Password</div>
        <!-- form start here -->
        <form method="post" action="{{route('change.password')}}">
            @csrf
            <input type="hidden" name="editid"/>
            <!-- parent table start here -->
            <table class="parent-table">
                <tr>
                    <td class="rightalign">Enter Old Password*</td>
                    <td><input type="text" name="oldpass"  class="length"   /></td>
                </tr>

                <tr>
                    <td class="rightalign">Enter New Password*</td>
                    <td><input type="text" name="newpass"  class="length"  /></td>
                </tr>

                <tr>
                    <td class="rightalign">Confirm New Password*</td>
                    <td><input type="text" name="cnewpass"  class="length" /></td>
                </tr>
            </table>
            <!-- parent table end here -->
             <input  class="sv-btn" type="submit" name="save" value="Save"/>  <input class="cl-btn" type="button" name="cancel" value="Cancel"/>
        <form>
    </div>
    <!-- add-container end here -->
</div>
@endsection
