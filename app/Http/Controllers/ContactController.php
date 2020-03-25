<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;

class ContactController extends BaseController
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
        $results = DB::select('select * from contacts');

        return response()->json($results); 
    }

    public function index()
    {
        $results = DB::select('select * from contacts');

        return response()
            ->view('contact-list', ['contacts' => $results
        ], 200); 
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
            'name' => 'required',
            'empresa_id' => 'required'
        ];

        $messages = [
            'name.required'       => 'O campo NOME é obrigatório.',
            'empresa_id.required' => 'É obrigatório escholher uma EMPRESA.'
        ];

        $this->validate($request, $fields, $messages);

        if ($request->has('id') && !empty($request->input('id'))) {
            $res = DB::table('contacts')
            ->where('id', $request->input('id'))
            ->update(
                [
                    'name' => $request->input('name'),
                    'telefones' => $request->input('telefones'),
                    'empresa_id' => $request->input('empresa_id'),
                    'updated_at' => new \DateTime()
                ]); 
        } else {
            $res = DB::insert('insert into contacts (name, telefones, empresa_id, created_at) values (?, ?, ?, ?)', 
            [
                $request->input('name'), 
                $request->input('telefones'), 
                $request->input('empresa_id'),
                new \DateTime()
            ]);
        }

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
        $contact = null;

        if (!empty($id))
        {
            $contact = DB::table('contacts')->where('id', $id)->first();
        }

        $results = DB::select('select * from companies');
        
        return response()
            ->view('contact-form', ['id' => $id, 'contact' => $contact, 'companies' => collect($results)->pluck('name')->toArray()], 200);
    }

    public function delete($id)
    {
        DB::table('contacts')->where('id', $id)->delete();

        return redirect('contacts');
    }
}
