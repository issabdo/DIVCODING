<?php

namespace App\Application\Controllers\Admin;

use App\Application\Requests\Admin\Team\AddRequestTeam;
use App\Application\Requests\Admin\Team\UpdateRequestTeam;
use App\Application\Controllers\AbstractController;
use App\Application\DataTables\TeamsDataTable;
use App\Application\Model\Team;
use Yajra\Datatables\Request;
use Alert;

class TeamController extends AbstractController
{
    public function __construct(Team $model)
    {
        parent::__construct($model);
    }

    public function index(TeamsDataTable $dataTable){
        return $dataTable->render('admin.team.index');
    }

    public function show($id = null){
        return $this->createOrEdit('admin.team.edit' , $id);
    }

    public function store(AddRequestTeam $request){
         return $this->storeOrUpdate($request , null , 'admin/team');
    }

    public function update($id , UpdateRequestTeam $request){
             return $this->storeOrUpdate($request , $id , 'admin/team');
    }

    public function getById($id){
        $fields = $this->model->getConnection()->getSchemaBuilder()->getColumnListing($this->model->getTable());
        return $this->createOrEdit('admin.team.show' , $id , ['fields' =>  $fields]);
    }

    public function destroy($id){
        return $this->deleteItem($id , 'admin/team')->with('sucess' , 'Done Delete team From system');
    }
}
