<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\ContatoRepository;
use App\Contato;
use App\Validators\ContatoValidator;

/**
 * Class ContatoRepositoryEloquent
 * @package namespace App\Repositories;
 */
class ContatoRepository extends BaseRepository 
{
    
    /*public function __construct()
    {
        parent::__construct(new Contato);
    }*/


    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Contato::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
