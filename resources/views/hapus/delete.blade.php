
<div class="modal text-left fade" id="delete{{$model->id}}">
	<div class="modal-dialog">
		<div class="modal-content">
			{!!Form :: open(['method'=>'delete','url'=>$url])!!}
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
				<h4 class="modal-title">{{{$title or "Hapus Data"}}}</h4>
			</div>
			<div class="modal-body">
				<p>
					{{$message or "Anda Ingin Menghapus data ini ?"}}
				</p>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-success">Yes</button>
				<button type="submit" class="btn btn-primary" data-dismiss="modal">No</button>
			</div>
			{!!Form ::close()!!}
		</div>
	</div>
</div>