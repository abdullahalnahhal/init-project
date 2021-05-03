<?php
namespace App\Http\Controllers;

/**
* [These Class makes Actions on Settings module]
* class SettingController
* @package App\Http\Controllers
* @author Abdullah Alnahhal <abdullahalnahhal@gmail.com> <https://www.linkedin.com/in/abdullah-al-nahhal-436319a9/> <https://github.com/abdullahalnahhal>
* @version 1.0.0
* @access public
*/

use Illuminate\Http\Request;
use App\Services\SettingService;

/**
 * @param SettingService $service [has RoleService object]
 */

class SettingController extends Controller
{
    /**
     * [$service has SettingService object]
     *
     * @var SettingService
     */
    private $service;

    /**
     * [__construct Create a new controller instance.]
     *
     * @param SettingService $service
     * @return void
     */
    public function __construct(SettingService $service)
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
        if(!isset($request->type)){
            $request->merge(['type' => 'website']);
        }

        $items = $this->service->findBy($request);

        return view("settings.index", [
            'items' => $items,
            'type' => $request->type ,
        ]);
    }

    /**
     * [update updates settings]
     *
     * @param Request $request [request sent to make update with]
     * @return \Illuminate\Routing\Redirector|void
     */
    public function update(Request $request)
    {
        $empty_request = $request->except(['shortcut', 'brand', '_token', "_method"]);

        $item = $this->service->save(new Request ($empty_request));

        if($request->hasFile('shortcut')){

            $item = $this->service->saveFile($request, 'shortcut');
        }

        if($request->hasFile('brand')){

            $item = $this->service->saveFile($request, 'brand');
        }


        return redirect()->route('admin.settings.index')->with('updated', "messages.Item Updated Successfully ... !");
    }
}
