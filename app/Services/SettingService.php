<?php
namespace App\Services;
/**
* [These Class Makes the DB logic of Settings module]
* class RoleService
* @package App\Services
* @author Abdullah Alnahhal <https://www.linkedin.com/in/abdullah-al-nahhal-436319a9/> <https://github.com/abdullahalnahhal>
* @version 1.0.0
*/

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Repositories\SettingRepository;

/**
* @property protected SettingRepository $repo [init used repository]
*/
class SettingService
{
    /**
     * [$repo has the SettingRepository object]
     *
     * @var SettingRepository $repo
     */
    private SettingRepository $repo;


    /**
     * Create a new Service instance.
     *
     * @return void
     */
    public function __construct(SettingRepository $repo)
    {
        $this->repo = $repo;
    }

    /**
     * [get requested setting]
     *
     * @param Request $request [Has all requested conditions to make search with]
     */
    public function findBy(Request $request)
    {
        $items = $this->repo->findBy($request);
        return $items;
    }
    /**
     * [saves requested setting]
     *
     * @param Request $request [Has all requested information to save with]
     * @param int $id [user Id if the action is update]
     *@return mixed
     */
    public function save(Request $request)
    {
       $item = $this->repo->save($request);

        return $item;
    }

    /**
     * [saveFile attach file to setting row]
     *
     * @param Request $request []
     * @param string $file_name []
     */
    public function saveFile(Request $request, string $file_name)
    {
        if($request->hasFile($file_name)){

            $item = $this->findBy(new Request(['name' => $file_name]))->first();

            if($item){

                $item->clearMediaCollection('images');
                $item->addMediaFromRequest($file_name)->toMediaCollection('images');
                
            }
        }

        return $item;

    }
}


?>
