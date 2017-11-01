<?php

namespace App\Services;

use App\Repositories\ContatoRepository;

class ContatoService
{


	public function getContato($request, $repository)
	{
		$id = $request->id;		
		if(!is_null($id)){
			return $repository->find($id);
		}
		return $repository->all();
	}


}
