
@extends('layouts.main')

@section('page-summary-section')
@include('layouts/leftlist')
<!-- content2 start  -->
<div class="content2">				
    <h4 class="pm">Page Manager</h4>
    <p class="thisline">This section display the list of pages </p>
    <p class="clickline"><a href="#">Click here</a> to create <a href="#">New Page</a></p>
    
    <form >
        <!-- search-table start  here -->
        <table class="searchtable">
            <tr>
                <td colspan="2">Search</td>
            </tr>
            <tr>
                <td>Search by Page Name</td>
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
                <th>Page Name</th>
                <th>Page Content</th>
                <th>Status</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        
        <tbody>
            @foreach ($data as $val )            
            <tr>
                <td>{{$val->id}}</td>
                <td>{{$val->name}}</td>
                <td>{{$val->content}}</td>
                <td>{{$val->status}}</td>
                <td><a href="{{'edit-display/'.$val->id}}">Edit</a></td>
                <td><a href="{{'delete-data/'.$val->id}}">Del</a></td>
            </tr>
            @endforeach
            
            <tr>
                <td colspan="6" >
                    {{$data->links('pagi')}}
                </td>
            </tr>
        </tbody>
    </table>
    <!-- idtable end here -->
</div>
<!-- content2 end  -->
@endsection