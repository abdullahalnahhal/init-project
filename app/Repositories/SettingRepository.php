<?php
namespace App\Repositories;
/**
* [These Class Makes the DB logic of Setting module]
* class SettingRepository
* @package App\Repositories
* @author Abdullah Alnahhal <https://www.linkedin.com/in/abdullah-al-nahhal-436319a9/> <https://github.com/abdullahalnahhal>
* @version 1.0.0
*/
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Repositories\BaseRepository;

class SettingRepository extends BaseRepository
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
    * @return Setting|null
    */
    public function save(Request $request)
    {
        foreach($request->all() as $key => $input){
            $item = $this->model->where(['name' => $key])->update(['value' => $input]);
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
            'type',
            'value'
        ];
    }
    /**
    * [gets the model namespace]
    * @return String
    */
    public function model():string
    {
        return Setting::class;
    }
}
?>
