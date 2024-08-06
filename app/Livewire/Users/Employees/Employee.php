<?php

namespace App\Livewire\Users\Employees;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Settings\Positions;
use Livewire\WithFileUploads;
use App\Models\Settings\UserType;
use App\Models\Users\Role;

class Employee extends Component
{
    public User $employee;
    public $accion = 'Crear';
    public $password_confirmation;
    use WithPagination;

    protected $rules =
    [
        'employee.name' => 'required',
        'employee.email' => 'email',
        'employee.password' => 'required',
        'employee.first_name' => '',
        'employee.last_name_father' => '',
        'employee.last_name_mother' => '',
        'employee.user_image' => '',
        'employee.gender' => 'required',
        'employee.birth_date' => '',
        'employee.marital_status' => '',
        'employee.primary_email' => '',
        'employee.secondary_email' => '',
        'employee.primary_phone' => '',
        'employee.secondary_phone' => '',
        'employee.home_phone' => '',
        'employee.nationality' => 'required',
        'employee.position' => 'required',
        'employee.user_type' => 'required',
        'employee.user_code' => 'required',
        'employee.user_status' => 'required',
    ];

    public function mount()
    {
        $this->employee = new User();
    }

    public function modal($employee_id = null)
    {
        if ($employee_id != null) {
            $this->accion = 'Modificar';
            $this->employee = User::find($employee_id);
        }
        else {
            $this->accion = 'Crear';
            $this->employee = new User();
        }
    }

    public function save()
    {
        $this->validate($this->rules);

        if ($this->employee->password) {
            if ($this->employee->password === $this->password_confirmation) {
                $this->employee->password = bcrypt($this->employee->password);
            } else {
                session()->flash('error', 'Las contraseñas no coinciden');
                return;
            }
        }

        $this->employee->save();
        $this->reset(['employee', 'password_confirmation']);
        session()->flash('message', 'Empleado guardado con éxito');
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
