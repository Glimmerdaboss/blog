@extends('layouts.admin-master')

@section('styles')
    <script src="https://use.fontawesome.com/d6d4dc5974.js"></script>
    <link rel="stylesheet" href="http://localhost:8079/blog/public/assets/css/categories.css">

@endsection

@section('content')
    <div class="container">
        <section id="category-admin">
            <form method="post">
                <div class="input-group">
                    <label for="name">Category name</label>
                    <input type="text" name="name" id="name"/>
                    <button type="submit" class="btn">Create Category</button>
                </div>
            </form>            
        </section>
        <section class="list">
            @foreach($categories as $category)
                <article>
                    
                    <div class="category-info" data-id="{{ $category->id }}">
                        <h3>{{ $category->name }}</h3>
                    </div>

                    <div class="edit">                        
                       <nav>
                           <ul>
                               <li class="category-edit"><input type="text"></li>
                               <li><a href="#">Edit</a></li>
                               <li><a href="#" class="danger">Delete</a></li>
                           </ul>
                       </nav>                       
                   </div>
                </article>
            @endforeach
        </section>
 @if($categories->lastPage()>1)
    <section class="pagination">
        @if($categories->currentPage() !==1)
          <a href="{{ $categories->previousPageUrl() }}"><i class="fa fa-caret-left"></i></a>
        @endif

        @if($categories->currentPage() !== $categories->lastPage())
          <a href="{{ $categories->nextPageUrl() }}"><i class="fa fa-caret-right"></i></a>
        @endif
    </section>
  @endif
    </div>
@endsection

@section('script')
<script type="text/javascript">
    var token = "{{ Session::token() }}";
</script>

<script type="text/javascript" src="http://localhost:8079/blog/public/assets/js/categories.js"></script>
@endsection

