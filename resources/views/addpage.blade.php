@extends('layouts.main')

@section('add-page-section')


@include('layouts/leftlist')
   
<!-- content2 start  -->
<div class="content2">
    <h4>Page Manager</h4>	
    <!-- add-conatiner start here -->
    <div class="add-container">
        <div class="add-line">Add Page</div>
        
        <form method="post">
            <input type="hidden" name="editid" value="<?php if(!empty($r['id'])) echo $r['id']; ?>" />
            
            <!-- parent table start here -->
            <table class="parent-table">
                
                <tr>
                    <td class="rightalign">Name*</td>
                    <td><input class="length" value="<?php if(!empty($r['name'])) echo $r['name']; ?>" name="name" type="text" /></td>
                </tr>
            
                <tr>
                    <td class="rightalign">Content</td>
                    <td>
                        <textarea class="box" name="content">
                        <?php if(!empty($r['content'])) echo $r['content']; ?>
                        </textarea>
                    </td>
                </tr>
                        
                <tr>
                    <td class="rightalign">Status</td>
                    <td>
                        <?php if(!empty($r['status']) && $r['status']==1)
                            { 	
                        ?>
                                <input checked type="checkbox" name="status"/>
                        <?php 
                            }
                            else {
                        ?>
                                <input  type="checkbox" name="status"/>
                        <?php
                                } 
                        ?>
                    </td>
                </tr>	
            </table>
            <!-- parent table end here -->
                    
             <input  class="sv-btn" type="submit" name="save" value="Save"/>  <input class="cl-btn" type="button" name="cancel" value="Cancel"/>				
        
        <form>
    </div>
    <!-- add-container end here -->
    
</div>
    <!-- content2 end  -->


@endsection