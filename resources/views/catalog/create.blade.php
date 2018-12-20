@extends('includes.headall')

@section('content')

	<br>
	<div class="container">
		<div class="col-md-8 col-md-offset-2">
			<div class="well">
				<form action="{{route('catalogposts.store')}}" method="post">
					<div class="text-center"><h4>Create a new Catalog</h4></div>

					{{csrf_field()}}

					<div class="form-group">
						<lable for="title">Title:</lable>		
						<input type="text" name="title" class="form-control" placeholder="Input title..">
					</div>

					<div class="form-group">
						<lable for="content">Content:</lable>		
						<textarea type="text" name="content" class="form-control" placeholder="Input content.."></textarea>
					</div>

					<button type="submit" class="btn btn-success">Save</button>

				</form>
			</div>
		</div> 
	</div>
@endsection