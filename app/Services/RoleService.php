<?php
namespace App\Services;
/**
* [These Class Makes the DB logic of Role module]
* class RoleService
* @package App\Services
* @author Abdullah Alnahhal <https://www.linkedin.com/in/abdullah-al-nahhal-436319a9/> <https://github.com/abdullahalnahhal>
* @version 1.0.0
*/

use App\Models\Role;
use Illuminate\Http\Request;
use App\Repositories\RoleRepository;

/**
* @property protected RoleRepository $repo [init used repository]
*/
class RoleService
{
    /**
     * [$repo has the RoleRepository object]
     *
     * @var RoleRepository $repo
     */
    private RoleRepository $repo;


    /**
     * Create a new Service instance.
     *
     * @return void
     */
    public function __construct(RoleRepository $repo)
    {
        $this->repo = $repo;
    }

    /**
     * [get requested roles]
     *
     * @param Request $request [Has all requested conditions to make search with]
     */
    public function findBy(Request $request)
    {
        $items = $this->repo->findBy($request);
        return $items;
    }
    /**
     * [saves requested roles]
     *
     * @param Request $request [Has all requested information to save with]
     * @param int $id [user Id if the action is update]
     *@return mixed
     */
    public function save(Request $request, Int $id = null)
    {
        $item = $this->repo->save($request, $id);
        return $item;
    }

    /**
     * [find finds item using its id]
     *
     * @param int $id [item's id]
     * @return null|Role
     */
    public function find(int $id)
    {
        $item = $this->repo->find($id);
        return $item;
    }

    /**
     * [delete removes role item]
     *
     * @param int $id [item's id]
     * @return int
     */
    public function delete(int $id)
    {
        $delete = $this->repo->delete($id);
        return $delete;
    }
}


?>
