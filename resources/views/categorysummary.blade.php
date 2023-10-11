@extends('layouts.main')

@section('category-summary-section')

			@include('layouts/leftlist');
			
		
			<!-- content2 start  -->
			<div class="content2">				
				<h4 class="pm">Category Manager</h4>
				<p class="thisline">This section display the list of Catogories. </p>
				<p class="clickline"><a href="#">Click here</a> to create <a href="#">New Category</a></p>
				
				<form>
					<!-- search-table start  here -->
					<table class="searchtable">
						<tr>
							<td colspan="2">Search</td>
						</tr>
						<tr>
							<td>Search by Category Name</td>
							<td><input type="text" name="s" />
							<button type="submit" id="sr-btn">Search</button>
							</td>
						</tr>
						
					</table>
					<!-- search-table end here  -->
				</form>
				
				<p class="pageline">Page 1 of 2, showing 10 records out of 13 total, starting on record 1, ending on 10</p> 
				
				<!-- id-table start here -->
				<table class="id-table">
					<thead>
						<tr>
							<th>Id</th>
							<th>Category Name</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					</thead>
					
					<tbody>
					
					
						<tr>
							
						</tr>
						
						
						<tr>
							<td colspan="6" >
								
							</td>
						</tr>
						
					</tbody>
				</table>
				<!-- idtable end here -->
			</div>
			<!-- content2 end  -->
    
@endsection