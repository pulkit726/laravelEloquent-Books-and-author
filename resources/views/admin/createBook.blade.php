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
                        <form action="{{ URL::to('/create/book') }}" method="POST">
                        @csrf
                            <div class="form-group">
                                <label for="book name">Book Name:</label>
                                <input type="text" class="form-control" id="bookname" name="book_name">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Price:</label>
                                <input type="text" class="form-control" id="price" name="book_price">
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