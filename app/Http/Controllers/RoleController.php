<?php
namespace App\Http\Controllers;

/**
* [These Class makes Actions on Role module]
* class RoleController
* @package App\Http\Controllers
* @author Abdullah Alnahhal <abdullahalnahhal@gmail.com> <https://www.linkedin.com/in/abdullah-al-nahhal-436319a9/> <https://github.com/abdullahalnahhal>
* @version 1.0.0
* @access public
*/

use Illuminate\Http\Request;
use App\Services\RoleService;
use App\Http\Requests\CreateRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
/**
 * @param RoleService $service [has RoleService object]
 */

class RoleController extends Controller
{
    /**
     * [$service has RoleService object]
     *
     * @var RoleService
     */
    private $service;

    /**
     * [__construct Create a new controller instance.]
     *
     * @param RoleService $service
     * @return void
     */
    public function __construct(RoleService $service)
    {
        $this->service = $service;
    }

    /**
     * [index gets the initial page elements]
     *
     * @param Request $request [request sent to the index]
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request):\Illuminate\Contracts\Support\Renderable
    {
        $items = $this->service->findBy($request);

        return view("roles.index", [
            'items' => $items,
        ]);
    }

    /**
     * [create gets the create page]
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create():\Illuminate\Contracts\Support\Renderable
    {
        return view("roles.create");
    }

    /**
     * [save creates role]
     *
     * @param CreateRoleRequest $request [request sent to be saved]
     * @return \Illuminate\Routing\Redirector
     */
    public function store(CreateRoleRequest $request)
    {
        $item = $this->service->save($request);

        if($item) {
            return redirect()->route('admin.roles.index')->with('created', "messages.Item Created Successfully ... !");
        }
        return redirect()->back()->withErrors("messages.Item Didn't created Successfully Please Try Again Or Call System Admin ... !");
    }

    /**
     * [edit gets the create page]
     *
     * @param int $id [requested item $id]
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit(int $id):\Illuminate\Contracts\Support\Renderable
    {
        $item = $this->service->find($id);

        if($item){
            return view("roles.edit", [
                'item' => $item,
            ]);
        }

        abort(404);
    }

    /**
     * [update updates role]
     *
     * @param UpdateRoleRequest $request [request sent to make update with]
     * @return \Illuminate\Routing\Redirector|void
     */
    public function update(UpdateRoleRequest $request, int $id)
    {
        $item = $this->service->find($id);

        if($item){

            $item = $this->service->save($request, $id);

            if($item){

                return redirect()->route('admin.roles.index')->with('updated', "messages.Item Updated Successfully ... !");
            }
            return redirect()->back()->withErrors("messages.Item Didn't updated Successfully Please Try Again Or Call System Admin ... !");
        }
        abort(404);
    }

    /**
     * [show gets the page that shows information]
     *
     * @param int $id
     * @return \Illuminate\Routing\Redirector|void
     */
    public function show(int $id)
    {
        $item = $this->service->find($id);

        if($item){
            return view("roles.show", [
                'item' => $item,
            ]);
        }

        abort(404);

    }

    /**
     * [destroy deletes user]
     *
     * @param int $id [removes user]
     * @return \Illuminate\Routing\Redirector|void
     */
    public function destroy(int $id)
    {
        $item = $this->service->find($id);

        if($item){
            $item = $this->service->delete($id);
            if($item){
                return redirect()->back()->with('deleted', "messages.Item Deleted Successfully ... !");
            }
            return redirect()->back()->withErrors("messages.Item Didn't deleted Successfully Please Try Again Or Call System Admin ... !");
        }
        abort(404);
    }
}
