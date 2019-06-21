@extends('admin.adminTemplate')

@section('title', 'Show Book')

@section('sidebar')
    @parent
    
@endsection

@section('content')


    <!-- right sidebar statrs here -->
    <div class="right_sidebar">
        <div class="right_content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="search-filter">
                            <input type="text" id="search_box" class="form-control" Placeholder="Search By Name/Email/Postal"/>                            
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <select id="drop_dwn"  class="form-control">
                            <option value="#">All</option>
                            <option value="first_name">Name</option>
                            <option value="email">Email</option>
                            <option value="postal_code">Postal Code</option>
                        </select>
                    </div>
                </div>
                <div class="table-responsive mt-3">
            
                    <div id="tag_container">
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- right sidebar ends here -->
    
@endsection

@section('js')
    @parent
    <script>
    $('document').ready(function(){
        console.log("this is my code");
    });
    </script>
@endsection