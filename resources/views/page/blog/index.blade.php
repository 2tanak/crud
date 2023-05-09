@extends('layouts.master')

@section('title', $title)
@section('content')
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
				{{$title}}
				
				</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>text</th>
                    <th>
					<a href="{{ route('blog.create') }}" class="btn btn-sm  bg-success">Добавить</a>
					
					</th>
                  </tr>
                  </thead>
                  <tbody>
				  @foreach($items as $k=>$blog)
                  <tr >
                    <td class='text-center align-middle'>{{$blog->id}}</td>
                    <td class='align-middle'>{{$blog->name}}</td>
					<td class='align-middle'>
					{!! $blog->the_excerpt($blog->text) !!}...
				    </td>
					
                    <td class='text-right align-middle'>
					
					  <div class="pop_up">
                        <i class="fa fa-bars burger" aria-hidden="true"></i>
						<ul class='none'>
						 
						   <li>
						    
							 <form method="POST" class="mt-3" action="{{ route('blog.destroy', $blog) }}">
                             <a type="button" class="btn btn-warning" href="{{ route('blog.edit', $blog) }}">Edit</a>
                             @csrf
                             @method('DELETE')
                             <button class="btn btn-danger" type="submit">Delete</button>
                              </form>
							
							
							
						  </li>
						</ul>
                      </div>
					
					
					
					
					
					
					</td>
                  </tr>
                 @endforeach
             
               
           
               
            
                 
                  </tfoot>
                </table>
				<div style='float:right;clear:both;margin-top:20px'>
		        {{ $items->links() }}
				</div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          
            <!-- /.card -->
          </div>
		  
		  
		
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
			
			
			
			

@endsection