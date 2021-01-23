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
     * Show an company.
     *
     * Retrieve and show an specific company.
     *
     * @param int $id
     * @return json
     **/
    public function show(int $id)
    {
        $company = $this->company->find($id);

        return response()->json($company);
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
        $data = $request->all();
        $company = $this->company->create($data);
        return response()->json($company);
    }

}
