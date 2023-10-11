@extends('layouts.main')


@section('add-product-section')
@include('layouts/leftlist')
<!-- content2 start  -->
<div class="content2">
    <h4>Page Product</h4>	
    <!-- add-conatiner start here -->
    <div class="add-container">
        <div class="add-line">Add Product</div>
        
        <form method="post" enctype="multipart/form-data">
            <input type="hidden" name="editid"  />
            
            <!-- parent table start here -->
            <table class="parent-table">
                <tr>
                    <td class="rightalign">Select Category*</td>
                    <td>
                        <select name="catname">
                        <option>&lt; select category &gt;</option>
                       
                        </select>
                    </td>
                </tr>
                
                <tr>
                    <td class="rightalign">Product Name*</td>
                    <td><input class="length" name="pname" type="text" /></td>
                </tr>
                <tr>
                    <td class="rightalign">Product Description*</td>
                    <td><input class="length" name="pdesc" type="text" /></td>
                </tr>
                <tr>
                    <td class="rightalign">Product Price*</td>
                    <td><input class="length" name="pprice" type="text" /></td>
                </tr>
                <tr>
                    <td class="rightalign">Product Image*</td>
                    <td><input class="length" name="pimage" type="file" /></td>
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