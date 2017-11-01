<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\TipoContato;
use App\Validators\TipoContatoRepositoryValidator;

/**
 * Class TipoContatoRepositoryRepositoryEloquent
 * @package namespace App\Repositories;
 */
class TipoContatoRepository extends BaseRepository 
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return TipoContato::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
