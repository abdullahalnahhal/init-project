<?php
namespace App\Services;
/**
* [These Class Makes the DB logic of User module]
* class UserService
* @package App\Services
* @author Abdullah Alnahhal <https://www.linkedin.com/in/abdullah-al-nahhal-436319a9/> <https://github.com/abdullahalnahhal>
* @version 1.0.0
*/

use App\Models\User;
use Illuminate\Http\Request;
use App\Repositories\UserRepository;

/**
* @property protected UserRepository $repo [init used repository]
*/
class UserService
{
    /**
     * [$repo has the UserRepository object]
     *
     * @var UserRepository $repo
     */
    private UserRepository $repo;


    /**
     * Create a new Service instance.
     *
     * @return void
     */
    public function __construct(UserRepository $repo)
    {
        $this->repo = $repo;
    }

    /**
     * [get requested users]
     *
     * @param Request $request [Has all requested conditions to make search with]
     */
    public function findBy(Request $request)
    {
        $items = $this->repo->findBy($request);
        return $items;
    }
    /**
     * [saves requested users]
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
     * @return null|User
     */
    public function find(int $id)
    {
        $item = $this->repo->find($id);
        return $item;
    }

    /**
     * [delete removes user item]
     *
     * @param int $id [item's id]
     * @return int
     */
    public function delete(int $id)
    {
        $delete = $this->repo->delete($id);
        return $delete;
    }

    /**
     * [assignRole assigns role to a specific user]
     *
     * @param User $user [user wanted to be assigned role to]
     * @param string $role [role wanted to be assigned]
     */
    public function assignRole(User $user, string $role)
    {
        return $user->assignRole($role);
    }

    /**
     * [clearMedia clears all media on user]
     *
     * @param User $user [user want to clear his media]
     * @return User
     */
    public function clearMedia(User $user)
    {
        return $user->clearMediaCollection('images');
    }

    /**
     * [attachMedia attach media file to user]
     *
     * @param Request $request [request to get file from]
     * @param User $user [user to attach file to]
     */
    public function attachMedia(Request $request, User $user)
    {
        if($request->hasFile('image')) {
            return $user->addMediaFromRequest('image')->toMediaCollection('images');
        }
        return false;
    }
}


?>
