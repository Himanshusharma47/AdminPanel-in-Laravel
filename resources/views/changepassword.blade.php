@extends('layouts.main')

@section('change-password-section')
@include('layouts/leftlist')
<div class="content2">
    <h4>Change Password</h4>	
    <!-- add-conatiner start here -->
    <div class="add-container">
        <div class="add-line">Change Password</div>
        
        <form method="post">
            <input type="hidden" name="editid"  />
            
            <!-- parent table start here -->
            <table class="parent-table">
                
                <tr>
                    <td class="rightalign">Enter Old Password*</td>
                    <td><input class="length"  name="oldpass" type="text" /></td>
                </tr>
                
                <tr>
                    <td class="rightalign">Enter New Password*</td>
                    <td><input class="length"  /></td>
                </tr>
                
                <tr>
                    <td class="rightalign">Confirm New Password*</td>
                    <td><input class="length"  name="cnewpass" type="text" /></td>
                </tr>
            
            </table>
            <!-- parent table end here -->
                    
             <input  class="sv-btn" type="submit" name="save" value="Save"/>  <input class="cl-btn" type="button" name="cancel" value="Cancel"/>				
        
        <form>
    </div>
    <!-- add-container end here -->
    
</div>
@endsection