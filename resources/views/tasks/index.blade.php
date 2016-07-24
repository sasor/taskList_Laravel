@extends("layouts.app")

@section("content")
	<div class="panel panel-default">
		<div class="panel-body">
		
			@include('common.errors')		
	
			<form action="{{ url('task') }}" method="post" class="form-horizontal">
				<div class="form-group">
					<label for="name" class="col-md-3 control-label">Task</label>
					<div class="col-md-6">
						<input class="form-control" type="text" name="name" id="name">
					</div>
				</div>	
				<div class="form-group">
					<div class="col-md-offset-3 col-md-6">
						<button type="submit" class="btn btn-default">Add Task</button>
					</div>
				</div>
				{{ csrf_field() }}
			</form>
		</div>
	</div>
	
	@if(count($tasks->count()))
		<div class="panel panel-default">
			<div class="panel-heading">
				Current Task
			</div>
			<div class="panel-body">
				<table class="table table-striped">
					<thead>
						<th>Task</th>	
						<th>&nbsp;</th>	
					</thead>
					<tbody>
						@foreach($tasks as $task)
							<tr>
								<td>{{ $task->name }}</td>	
								<td>
									<form action="{{ url('/task/' . $task->id) }}" method="post">
										<button type="submit" class="btn btn-danger">Delete</button>
										{{ method_field('DELETE') }}
										{{ csrf_field() }}
									</form>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	@endif
@endsection
