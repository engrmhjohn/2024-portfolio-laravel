<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Menu;

require_once app_path('Helper/image.php');

class CMSController extends Controller
{

    public function addMenu()
    {
        return view('backend.cms.common.menu.show');
    }
    public function saveMenu(Request $request)
    {
        $menu = new Menu();
        $menu->en_menu_first_name = $request->en_menu_first_name;
        $menu->en_menu_last_name = $request->en_menu_last_name;
        $menu->en_menu_intro = $request->en_menu_intro;
        $menu->en_menu_about = $request->en_menu_about;
        $menu->en_menu_service = $request->en_menu_service;
        $menu->en_menu_team = $request->en_menu_team;
        $menu->en_menu_education = $request->en_menu_education;
        $menu->en_menu_work = $request->en_menu_work;
        $menu->en_menu_contact = $request->en_menu_contact;
        $menu->logo = image_upload($request->logo);
        $menu->save();
        return redirect(route('admin.manage_menu'))->with('message', 'Successfully Added!');
    }
    public function manageMenu()
    {
        return view('backend.cms.common.menu.index', [
            'menu' => Menu::all()
        ]);
    }
    public function editMenu($id)
    {
        $menu = Menu::find($id);

        return view('backend.cms.common.menu.edit', [
            'menu' => $menu
        ]);
    }
    public function updateMenu(Request $request)
    {
        $menu               = Menu::find($request->menu_id);
        $menu->en_menu_first_name = $request->en_menu_first_name;
        $menu->en_menu_last_name = $request->en_menu_last_name;
        $menu->en_menu_intro = $request->en_menu_intro;
        $menu->en_menu_about = $request->en_menu_about;
        $menu->en_menu_service = $request->en_menu_service;
        $menu->en_menu_team = $request->en_menu_team;
        $menu->en_menu_education = $request->en_menu_education;
        $menu->en_menu_work = $request->en_menu_work;
        $menu->en_menu_contact = $request->en_menu_contact;

        if ($request->file('logo')) {
            if (isset($menu)) {
                delete_image($menu->logo);
                $menu->delete();
            }
            $menu->logo = image_upload($request->logo);
        }
        $menu->save();
        return redirect(route('admin.manage_menu'))->with('message', 'Successfully Updated!');
    }

}
