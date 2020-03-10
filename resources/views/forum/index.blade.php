@extends('layouts.master')

@section('content')
<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Forum</h3>
									<div class="right">																											
										<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah forum</a>										
									</div>
								</div>
								<div class="panel-body">
                                <ul class="list-unstyled activity-list">
                                    @foreach($forum as $frm)
										<li>
											<img src="{{$frm->user->siswa->getAvatar()}}" alt="Avatar" class="img-circle pull-left avatar">
											<p><a href="/forum/{{$frm->id}}/view">{{$frm->user->siswa->nama_depan}} :  {{$frm->judul}} <span class="timestamp">{{$frm->created_at->diffForHumans()}}</span></p>
										</li>
									@endforeach
									</ul>
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Forum</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/forum/create" method="POST">
        	{{csrf_field()}}

		  <div class="form-group{{$errors->has('judul') ? ' has-error' : ''}}">
		    <label for="exampleInputEmail1">Judul</label>
		    <input name="judul" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Judul" value="{{old('judul')}}">	
		    @if($errors->has('judul'))
				<span class="help-block">{{$errors->first('judul')}}</span>
		    @endif 
		  </div>	 		  

		  <div class="form-group">
			<label for="exampleFormControlTextarea1">Konten</label>
			<textarea name="konten" class="form-control" id="content" rows="3">{{old('alamat')}}</textarea>
			</div> 

		 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
		</form>
      </div>
    </div>
  </div>
@endsection