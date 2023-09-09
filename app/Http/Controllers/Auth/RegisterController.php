<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request; // Certifique-se de importar a classe Request

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/users'; // Redirecionamento após o registro bem-sucedido

    protected function create(array $data)
    {
        return User::create([
            'nome' => $data['name'],
            'cpf' => $data['cpf'],
            'email' => $data['email'],
            'telefone' => $data['phone'],
            'cep' => $data['cep'],
            'endereco' => $data['address'],
            'complemento' => $data['complement'],
            'bairro' => $data['neighborhood'],
            'cidade' => $data['city'],
            'estado' => $data['state'],
            'data_de_nascimento' => $data['birthdate'],
            'password' => Hash::make($data['password']),
        ]);
    }


    public function __construct()
    {
        $this->middleware('guest');
    }

    // Método para exibir o formulário de registro
    public function showRegistrationForm()
    {
        return view('auth.register'); // Certifique-se de que o nome da view esteja correto
    }

    protected function register(Request $request)
    {
        $this->validate($request, $this->rules());
    
        $user = $this->create($request->all());
    
        Auth::login($user);
    
        return redirect($this->redirectPath());
    }

    protected function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'full_name' => ['required', 'string', 'max:255'],
            'cpf' => ['required', 'string', 'max:14', 'unique:users'], // Adicione a regra de validação para o CPF
            'phone' => ['required', 'string', 'max:20'], // Adicione a regra de validação para o telefone
            'cep' => ['required', 'string', 'max:10'], // Adicione a regra de validação para o CEP
            'address' => ['required', 'string', 'max:255'], // Adicione a regra de validação para o endereço
            'complement' => ['nullable', 'string', 'max:255'], // Adicione a regra de validação para o complemento (opcional)
            'neighborhood' => ['required', 'string', 'max:255'], // Adicione a regra de validação para o bairro
            'city' => ['required', 'string', 'max:255'], // Adicione a regra de validação para a cidade
            'state' => ['required', 'string', 'max:255'], // Adicione a regra de validação para o estado
            'birthdate' => ['required', 'date'], // Adicione a regra de validação para a data de nascimento
        ];
    }

    // Resto do código do controlador...
}

