<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Role;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Validator;
    use App\Order;
    use App\User;
    use Illuminate\Support\Facades\Hash;

    class ApiController extends Controller {
        public function getRoles(){
            $roles = Role::all();
            //            $roles = DB::table('roles')->select('*')->get();
            return $this->makeResponse(200, true, ['roles' => $roles]);

        }

        public function getUsers(){
            $users = DB::table('users')->join('roles', 'users.role_id', '=', 'roles.id')
                ->select('users.*', 'roles.name as role')->get();
            return $this->makeResponse(200, true, ['users' => $users]);
        }

        public function register(Request $request){
            $validator = Validator::make($request->all(), [
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'email' => 'required|string|max:255',
                'phone' => 'required|string|max:255',
                'password' => 'required|string|max:255',
            ]);
            if($validator->fails()) {
                return $this->makeResponse(400, false, ['errors' => $validator->errors()->all()]);
            }
            $user = new User();
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->password = Hash::make($request->password);
            $user->role_id = Role::USER;
            $user->save();

            return $this->makeResponse(200, true, ['user' => $user]);
        }

        public function login(Request $request){
            $validator = Validator::make($request->all(), [
                'email' => 'required|string|max:255',
                'password' => 'required|string|max:255',
            ]);
            if($validator->fails()) {
                return $this->makeResponse(400, false, ['errors' => $validator->errors()->all()]);
            }
            $user = User::where('email', $request->email)->first();
            $check_user = Hash::check($request->password, $user->password);
            if(!$check_user) {
                return $this->makeResponse(400, false, ['errors' => $validator->errors()->all()]);
            }

            return $this->makeResponse(200, true, ['user' => $user]);
        }

        private function makeResponse(int $code, Bool $success, Array $data){
            $json = array_merge($data, ['success' => $success]);
            return response()->json($json)->setStatusCode($code);
        }
    }
