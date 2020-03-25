<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CompanyController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function list()
    {
        $results = DB::select('select * from companies');

        return response()->json($results); 
    }

    // Método para API
    public function index()
    {
        $results = DB::select('select * from companies');

        return response()
            ->view('company-list', ['companies' => $results], 200); 
    }

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function create(Request $request)
    {
        $fields = [
            'name'     => 'required',
            'role'     => 'required',
            'document' => 'required'
        ];

        $messages = [
            'name.required' => 'O campo NOME é obrigatório.'
        ];

        if ($request->input('role') == 'Empresa')
        {
            $fields['nome_fantasia']            = 'required';
            $messages['document.required']      = 'O campo CNPJ é obrigatório.';
            $messages['nome_fantasia.required'] = 'O campo NOME FANTASIA é obrigatório.';
        } else {
            $fields['rg']              = 'required';
            $fields['data_nascimento'] = 'required';

            $messages['name.required']              = 'O campo NOME é obrigatório.';
            $messages['role.required']              = 'O campo TIPO é obrigatório.';
            $messages['document.required']          = 'O campo CPF é obrigatório.';
            $messages['rg.required']                = 'O campo RG é obrigatório.';
            $messages['data_nascimento.required']   = 'O campo DATA DE NASCIMENTO é obrigatório.';
        }

        $this->validate($request, $fields, $messages);

        $res = DB::insert('insert into companies (name, role, document) values (?, ?, ?)', 
            [
                $request->input('name'), 
                $request->input('role'), 
                $request->input('document')
            ]);

        //return response()->json($res);
        return redirect('contacts');
    }

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function form($id = null)
    {
        $company = null;

        if (!empty($id))
        {
            $company = DB::table('companies')->where('id', $id)->first();
        }

        return response()
            ->view('company-form', ['company' => $company], 200); 
    }

    public function delete($id)
    {
        DB::table('companies')->where('id', $id)->delete();

        return redirect('companies');
    }
}
