<?php
namespace App\Repositories;
/**
* [These Class Makes the DB logic of Role module]
* class RoleRepository
* @package App\Repositories
* @author Abdullah Alnahhal <https://www.linkedin.com/in/abdullah-al-nahhal-436319a9/> <https://github.com/abdullahalnahhal>
* @version 1.0.0
*/
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Repositories\BaseRepository;

class RoleRepository extends BaseRepository
{
    /**
    * [These Method make search using sent criteria into repo model]
    * @param Request $request [These request has the own search conditions]
    * @param int|null $skip [Number of rows DB will skip to start select]
    * @param int|null $limit [Number of rows that DB will return]
    * @param array $columns [array of selected columns only]
    * @return Collection
    */
    public function findBy(Request $request, Int $skip = null, Int $limit = null, $columns = ['*']):Collection
    {
        $items = $this->all($request->all(), $skip, $limit, $columns);
        return $items;
    }
    /**
    * [saves item using the given information into repo model]
    * @param Request $request [These request has information]
    * @param int|null $id [ID of the item wanted to be saved]
    * @return Role|null
    */
    public function save(Request $request, Int $id = null)
    {
        if ($id) {
            $item = $this->update($request->all(), $id);
        }else{
            $item = $this->create($request->all());
        }

        return $item;
    }
    /**
    * [gets array of columns that will affect in search]
    * @return Array
    */
    public function getFieldsSearchable():array
    {
        return [
            'name',
            'guard_name'
        ];
    }
    /**
    * [gets the model namespace]
    * @return String
    */
    public function model():string
    {
        return Role::class;
    }
}
?>
