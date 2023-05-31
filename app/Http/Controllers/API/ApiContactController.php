<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Exception;
use Illuminate\Http\Request;

class ApiContactController extends Controller
{
    public function listContact(Request $request)
    {

        try {
            $data = Contact::orderBy('nama', 'ASC')->get(); // select * from  users orderBy name ASC

            return response()->json([
                'success' => true,
                'messege' => "success",
                'contact' => $data
            ], 200);


            // ini biasanya hasil dari create itu meruoakan true or false

        } catch (Exception $error) {
            return response()->json([
                'success' => false,
                'massage' => 'fail : ' . $error->getMessage(),
                'contact' => null
            ], 500);
        }
    }

    public function postContact(Request $request)
    {
        try {
            $contact = Contact::create([
                'nama' => request('nama'),
                'email' => request('email'),
                'plan' => request('plan'),
                'project_date' => request('project_date'),
            ]);

            return response()->json([
                'success' => true,
                'messege' => "success",
                'contact' => $contact
            ], 200);

        } catch (Exception $error) {
            return response()->json([
                'success' => false,
                'massage' => 'fail : ' . $error->getMessage(),
                'contact' => null
            ], 500);
        }
    }

  }

