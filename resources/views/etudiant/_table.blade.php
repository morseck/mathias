<table class="table">
	<tr>
		<th>{{trans('etudiant.nom')}}</th>
		<th>{{trans('etudiant.prenom')}}</th>
		<th>Action</th>
	</tr>
	@foreach($etudiants as $etudiant)
		<tr>
			<td>
				<a href="{{url('etudiants/show/'.$etudiant->id)}}">
					{{$etudiant->nom}}
				</a>
			</td>	
			<td>
				<a href="{{url('etudiants/show/'.$etudiant->id)}}">
					{{$etudiant->prenom}}
				</a>
			</td>
			<td> 
				<a href="{{url('etudiants/edit/'.$etudiant->id)}}" data-toggle="tooltip" title="{{trans('etudiant.modifier')}}" data-placement="left">
					<i class="glyphicon glyphicon-pencil"></i>
				</a>

				<a href="{{url('etudiants/destroy/'.$etudiant->id)}}" data-placement="right" data-toggle="tooltip" title="{{trans('etudiant.supprimer')}}" style="margin-left: 10px; color: red;" onclick="return confirm('Etes-vous sur de vouloir supprimer ?')">
					<i class="glyphicon glyphicon-trash"></i>
				</a>
			</td>

		</tr>
	@endforeach

</table>