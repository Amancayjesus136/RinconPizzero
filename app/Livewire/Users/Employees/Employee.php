<?php

namespace App\Livewire\Users\Employees;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Settings\Positions;
use App\Models\Settings\UserType;
use App\Models\Users\Role;
use Illuminate\Support\Facades\Hash;

class Employee extends Component
{
    public $name, $email, $password, $password_confirmation, $employee_id;
    public $accion = 'Crear';
    use WithPagination;

    public function mount()
    {
        $this->resetProperties();
    }

    public function modal($employee_id = null)
    {
        if ($employee_id != null) {

            $this->accion = 'Modificar';
            $employee = User::find($employee_id);
            if ($employee) {
                $this->name = $employee->name;
                $this->email = $employee->email;
                $this->password = '';
                $this->password_confirmation = '';
                $this->employee_id = $employee_id;
            }
        } else {
            $this->accion = 'Crear';
            $this->resetProperties();
        }
    }

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required',
        ]);

        if ($this->employee_id) {
            $user = User::find($this->employee_id);
            if ($user) {
                $user->update([
                    'name' => $this->name,
                    'email' => $this->email,
                    'password' => Hash::make($this->password),
                ]);
            }
        } else {
            User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make($this->password),
            ]);
        }

        session()->flash('message', 'Empleado guardado con éxito');
        $this->resetProperties();
        $this->dispatchBrowserEvent('notificar_accion');
    }

    private function resetProperties()
    {
        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->password_confirmation = '';
        $this->employee_id = null;
    }

    public function render()
    {
        $positions = Positions::whereIn('name_position', ['Dueño', 'Socio', 'Empleado'])->get();
        $users_type = UserType::whereIn('name_user_type', ['Usuario supervisor', 'Usuario regular'])->get();
        $roles = Role::whereIn('role', ['Administrador', 'Representante', 'Operario'])->get();

        return view('livewire.users.employees.employee', [
            'employees' => User::paginate(10),
            'positions' => $positions,
            'users_type' => $users_type,
            'roles' => $roles,
        ]);
    }
}
