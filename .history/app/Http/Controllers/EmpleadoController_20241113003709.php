<?php
namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Empleado;
use App\Models\Puesto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class EmpleadoController extends Controller
{
    // Mostrar todos los empleados
    public function index()
    {
        $departamentos = Departamento::all();
    $puestos = Puesto::all();
        $empleados = Empleado::all();
        return view('empleados', compact('empleados', 'departamentos', 'puestos'));

    }
    // Almacenar el nuevo empleado
    public function store(Request $request)
    {
        // Validar los campos del formulario
        $request->validate([
            'nombre' => 'required|max:100',
            'apellidoP' => 'required|max:100',
            'apellidoM' => 'required|max:100',
            'email' => 'required|email|unique:empleados,email',
            'telefono' => 'required|unique:empleados,telefono',
            'rfc' => 'required|unique:empleados,rfc|max:13',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',

            'fecha_nacimiento' => 'required|date',
            'fecha_contratacion' => 'required|date',
        ]);
        $request->merge([
            'rfc' => strtoupper($request->input('rfc'))
        ]);
        // Crear una instancia del modelo y llenar con los datos
        $empleado = new Empleado($request->except('imagen'));
        // Manejar la subida de la imagen
        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $nombreArchivo = time() . '_' . $file->getClientOriginalName();
            $filePath = 'assets/imag/employees/' . $nombreArchivo;
            // Usar Storage para guardar la imagen
            if (Storage::disk('public')->put($filePath, file_get_contents($file))) {
                $empleado->imagen = $filePath;
            } else {
                return redirect()->back()->with('error', 'No se pudo guardar la imagen. Verifica la configuración de almacenamiento.')->withInput();
            }
        }
        // Guardar los datos del empleado
        if ($empleado->save()) {
            return redirect()->route('empleados')->with('success', 'Empleado creado exitosamente');
        } else {
            return redirect()->back()->with('error', 'No se pudo crear el empleado. Por favor, intenta de nuevo.')->withInput();
        }
    }
    public function create()
{
    $departamentos = Departamento::all();
    $puestos = Puesto::all();
    return view('empleados', compact('departamentos', 'puestos'));
}
    // Mostrar el formulario para editar un empleado
    public function edit($id)
    {
        $empleado = Empleado::findOrFail($id);
        return view('empleados', compact('empleado'));
    }
    // Actualizar un empleado existente
    public function update(Request $request, $id)
    {
        $empleado = Empleado::findOrFail($id);

        // Validation rules
        $rules = [
            'nombre' => 'required|max:100',
            'apellidoP' => 'required|max:100',
            'apellidoM' => 'required|max:100',
            'email' => 'required|email|unique:empleados,email,' . $id,
            'telefono' => 'required|unique:empleados,telefono,' . $id,
            'rfc' => 'required|unique:empleados,rfc|max:13' . $id,
            'fecha_nacimiento' => 'required|date',
            'fecha_contratacion' => 'required|date',
        ];
        $request->merge([
            'rfc' => strtoupper($request->input('rfc')),
            'nombre' => strtoupper($request->input('nombre')),
            'rfc' => strtoupper($request->input('rfc')),
        ]);

        // Solo validar la imagen si se proporciona una nueva
        if ($request->hasFile('imagen')) {
            $rules['imagen'] = 'image|mimes:jpeg,png,jpg,gif|max:2048';
        }

        $request->validate($rules);

        // Update employee details
        $empleado->fill($request->except('imagen'));

        // Handle image upload only if a new image is provided
        if ($request->hasFile('imagen')) {
            // Delete the old image if it exists
            if ($empleado->imagen) {
                Storage::disk('public')->delete($empleado->imagen);
            }
            // Store the new image
            $path = $request->file('imagen')->store('employees', 'public');
            $empleado->imagen = $path;
        }

        $empleado->save();

        return redirect()->route('empleados')->with('success', 'Empleado actualizado correctamente.');
    }

    // Eliminar un empleado

        public function destroy($id)
    {
        $empleado = Empleado::findOrFail($id);

        // Eliminar la imagen asociada si existe
        if ($empleado->imagen) {
            Storage::disk('public')->delete($empleado->imagen);
        }

        $empleado->delete();

        return redirect()->route('empleados')->with('success', 'Empleado eliminado correctamente.');
    }
    public function show(Empleado $empleados)
    {
        return view('empleados', compact('empleados'));
    }
}


