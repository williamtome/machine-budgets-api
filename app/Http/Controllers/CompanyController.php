<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * @var Company
     */
    private $company;

    public function __construct(Company $company)
    {
        $this->company = $company;
    }

    /**
     * Show all the companies.
     *
     * Retrieve and show all the companies.
     *
     * @return json
     **/
    public function index()
    {
        $companies = $this->company->all();

        return response()->json($companies);
    }

    /**
     * Store company.
     *
     * Store data of the company.
     *
     * @param Request $request Request data of the company
     * @return type
     * @throws conditon
     **/
    public function store(Request $request)
    {
        dd($request->all());
    }

}
