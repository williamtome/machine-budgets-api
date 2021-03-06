<?php

namespace App\Http\Controllers;

use App\Http\Resources\CompanyResource;
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

        return new CompanyResource($companies);
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

        return new CompanyResource($company);
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
        return new CompanyResource($company);
    }

    /**
     * Update company.
     *
     * Update data of the company.
     *
     * @param Request $request Request data of the company
     * @param int $id company id
     * @return json
     * @throws conditon
     **/
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $company = $this->company->find($id);
        $company->update($data);

        return new CompanyResource($company);
    }

    /**
     * Delete an company.
     *
     * Delete an specific company.
     *
     * @param int $id
     * @return json $company
     **/
    public function delete(int $id)
    {
        $company = $this->company->find($id);
        $company->status = 0;
        $company->delete();

        return new CompanyResource($company);
    }

}
