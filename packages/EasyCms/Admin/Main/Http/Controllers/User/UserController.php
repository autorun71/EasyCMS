<?php


namespace Pkg\EasyCms\Admin\Main\Http\Controllers\User;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Pkg\EasyCms\Admin\Main\Http\Controllers\AdminController;
use Pkg\EasyCms\Admin\Main\Http\Requests\UserSaveRequest;
use Pkg\EasyCms\Admin\Main\Repositories\RoleRepository;
use Pkg\EasyCms\Admin\Main\Repositories\UserRepository;

class UserController extends AdminController
{

    /**
     * @var UserRepository
     */
    private UserRepository $userRepository;
    private RoleRepository $roleRepository;

    /**
     * UserController constructor.
     * @param UserRepository $userRepository
     * @param RoleRepository $roleRepository
     */
    public function __construct(UserRepository $userRepository, RoleRepository $roleRepository)
    {
        $this->userRepository = $userRepository;
        $this->roleRepository = $roleRepository;

        parent::__construct();
    }

    public function index()
    {
        return $this->view('admin::settings.user.index');
    }

    public function edit($id)
    {
        $user = $this->userRepository->getEdit($id);
        $roles = $this->roleRepository->getAll();
        return $this->view('admin::settings.user.edit', compact('user', 'roles'));
    }

    public function update(UserSaveRequest $request, $id)
    {

        $data = $request->input();
        if (!$data['password']) {
            unset($data['password']);
        } else {
            if ($data['password'] == $data['password_confirmation']) {
                $data['password'] = bcrypt($data['password']);
            } else {
                session()->flash('warning', trans('admin::app.users.users.password-match'));

                return redirect()->back();
            }
        }
        if (!isset($data['status'])){
            $data['status'] = 0;
        }
        $item = $this->userRepository->getEdit($id);
        $item->update($data);
        if ($item) {
            return redirect()
                ->route('admin.settings.user')
                ->with(["success" => trans('admin::app.datagrid.create-success')]);
        } else {
            return back()
                ->withErrors(["msg" => trans('region::app.section.main.create-error')])
                ->withInput();
        }
    }

    public function create()
    {
        $roles = $this->roleRepository->getAll();
        return $this->view('admin::settings.user.create', compact( 'roles'));
    }

    public function store(UserSaveRequest $request)
    {
        $this->validate($request, [
            'password' => 'required|min:6|confirmed',
        ]);
        $data = $request->input();

        if (!isset($data['status'])){
            $data['status'] = 0;
        }
        if ($data['password'] == $data['password_confirmation']) {
            $data['password'] = bcrypt($data['password']);
        } else {
            session()->flash('warning', trans('admin::app.tables.users.password-match'));

            return redirect()->back();
        }
        $item = new User($data);
        $item->save();
        if ($item) {
            return redirect()
                ->route('admin.settings.user')
                ->with(["success" => trans('admin::app.datagrid.create-success')]);
        } else {
            return back()
                ->withErrors(["msg" => trans('region::app.section.main.create-error')])
                ->withInput();
        }
    }

    public function destroy($id)
    {
        $item = $this->userRepository->getEdit($id);
//        return response()->json([$item]);
        if($item->delete()){
            return \response()->json(['result' => true]);
        }


    }

}
