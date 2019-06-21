@extends('admin.adminTemplate')

@section('title', 'Create Book')

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
                        <form action="{{ URL::to('/login') }}" method="POST">
                        @csrf
                            <div class="form-group">
                                <label for="book name">Email:</label>
                                <input type="text" class="form-control"  name="email">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input type="password" class="form-control"  name="password">
                            </div>
                            <button type="submit" name="submit" class="btn btn-default">Submit</button>
                        </form>
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