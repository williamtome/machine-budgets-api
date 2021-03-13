<?php

namespace App\Http\Controllers;

use App\Http\Resources\MachineResource;
use App\Models\Machine;
use Illuminate\Http\Request;

class MachineController extends Controller
{   /**
     * @var Machine
     */
    private $machine;

    public function __construct(Machine $machine)
    {
        $this->machine = $machine;
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
        $machines = $this->machine->all();

        return new MachineResource($machines);
    }

    /**
     * Show an machine.
     *
     * Retrieve and show an specific machine.
     *
     * @param int $id
     * @return json
     **/
    public function show(int $id)
    {
        $machine = $this->machine->find($id);

        return new MachineResource($machine);
    }

    /**
     * Store machine.
     *
     * Store data of the machine.
     *
     * @param Request $request Request data of the machine
     * @return type
     * @throws conditon
     **/
    public function store(Request $request)
    {
        $data = $request->all();
        $machine = $this->machine->create($data);
        return new MachineResource($machine);
    }

    /**
     * Update machine.
     *
     * Update data of the machine.
     *
     * @param Request $request Request data of the machine
     * @param int $id machine id
     * @return json
     * @throws conditon
     **/
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $machine = $this->machine->find($id);
        $machine->update($data);

        return new MachineResource($machine);
    }

    /**
     * Delete an machine.
     *
     * Delete an specific machine.
     *
     * @param int $id
     * @return json $machine
     **/
    public function destroy(int $id)
    {
        $machine = $this->machine->find($id);
        $machine->status = 0;
        $machine->delete();

        return new MachineResource($machine);
    }

}
