<?php

namespace App\Http\Controllers\Atom;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Atom as AtomModel;

class Atom extends Controller
{
    public function index($atom)
    {
        //Variables
        $str = Str::ucfirst(Str::lower($atom));
        $atom_pre = AtomModel::where("name", $str);

        //Proccesses

        //Atom exists
        if ($atom_pre->exsits()) {
            $atom_object = new AtomModel($atom_pre->get()->id);
            return view("atom.atom", [
                "id" => $atom_object->Id(),
                "name" => $atom_object->Name(),
                "atomic_number" => $atom_object->Atomic_Number(),
                "atomic_mass" => $atom_object->Atomic_Mass(),
                "symbol" => $atom_object->Symbol(),
                "stability" => $atom_object->Stability(),
                "isotopes" => $atom_object->Isotopes(),
                "proton" => $atom_object->Proton(),
                "electron" => $atom_object->Electron(),
                "neutron" => $atom_object->Neutron()
            ]);
        }

        //Atom not exists
        else {
            return view("found.atom", [
                "atom" => $atom,
            ]);
        }
    }

    public function found($atom)
    {
        return view("found.atom", [
            "atom" => $atom,
        ]);
    }
}
