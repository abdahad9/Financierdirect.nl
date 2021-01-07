<?php

namespace App\Http\Controllers;

use App\FactuurCSV;
use App\UserCSV;
use App\Services\moneyBirdService;
use Illuminate\Http\Request;
use Picqer\Financials\Moneybird\Connection;


class InvoiceController extends Controller
{
    protected $connection;
    public function __construct()
    {
        
    }

    public function token(Request $request)
    {
        
        
        $connection = new \Picqer\Financials\Moneybird\Connection();

        $connection->setRedirectUrl('http://localhost:8000/moneybird/public/token');
        $connection->setClientId('5407637a05c9c2a754704a8eaec3e25c');
        $connection->setClientSecret('bed140ab6834b72a6f8bc60cba0ce39d97b5dc3295adbe4ea105907a93f07629');
        

        // Get authorization code as described in readme (always set this when available)
        ( $connection->setAuthorizationCode($request->code));
        // Set this in case you got the access token, otherwise client will fetch it (always set this when available)
        $connection->setAccessToken('bd1151d5a20c1bf02e94a433d32f10ca88fc728e27783f8d3908d8dfa4b3fd3e');
        
        try {
            $connection->connect();
        } catch (\Exception $e) {
            throw new Exception('Could not connect to Moneybird: ' . $e->getMessage());
        }
        
        // After connection save the last access token for reuse 
        $connection->getAccessToken(); // will return the access token you need to save

        // Set up a new Moneybird instance and inject the connection
        $moneybird = new \Picqer\Financials\Moneybird\Moneybird($connection);

        // Example: Get administrations and set the first result as active administration
        $administrations = $moneybird->administration()->getAll();
        $connection->setAdministrationId($administrations[0]->id);

        // Example: Create a new contact
        $contact_data = UserCSV::all();
        $invoice_data = FactuurCSV::first();

        foreach($contact_data as $single_contact)
        {
            $contact = $moneybird->contact();
            $contact->customer_id = $single_contact->id;
            $contact->firstname = $single_contact->first_name;
            $contact->lastname = $single_contact->last_name;
            $contact->email = $single_contact->email;
            $contact->save();
        
                $invoice = $moneybird->SalesInvoice();
                $invoice->contact_id = $contact->id;
                $invoice->reference = $invoice_data->status;
                $invoice->invoice_id = $invoice_data->product_id;
                $invoice->save();
                        
        }

        // var_dump($contact->id); // Contact object (as saved in Moneybird)
        var_dump($invoice);

    }
    public function index(Request $request)
    {
        $connection = new Connection;
        $connection->setRedirectUrl('http://localhost:8000/moneybird/public/token');
        $connection->setClientId('5407637a05c9c2a754704a8eaec3e25c');
        $connection->setClientSecret('bed140ab6834b72a6f8bc60cba0ce39d97b5dc3295adbe4ea105907a93f07629');
        
        // Get authorization code as described in readme (always set this when available)
        $connection->redirectForAuthorization();
        
        // Set up a new Moneybird instance and inject the connection
        $moneybird = new \Picqer\Financials\Moneybird\Moneybird($connection);
        
        // Example: Get administrations and set the first result as active administration
        $administrations = $moneybird->administration()->getAll();
        $connection->setAdministrationId($administrations[0]->id);
        
        // Example: Fetch list of salesinvoices 
        $salesInvoices = $moneybird->salesInvoice()->get();
        var_dump($salesInvoices); // Array with SalesInvoice objects
        }


        public function invoice(Request $request)
        {   
            moneyBirdService::addInvoiceCsv($request->file('upload-file'));     
        }

        public function contacts(Request $request)
        {   
            moneyBirdService::addUserCsv($request->file('upload-file'));
        }
        
}