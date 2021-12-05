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
        if ($atom_pre->exists()) {
            $id = $atom_pre->value("id");

            $atom_object = AtomModel::getAtomById($id);

            return view("atom.atom", [
                "atom" => $str,
                "name" => $atom_object->name,
                "atomic_number" => $atom_object->atomic_number,
                "atomic_mass" => $atom_object->atomic_mass,
                "symbol" => $atom_object->symbol,
                "stability" => $atom_object->stability,
                "isotopes" => $atom_object->isotopes,
                "proton" => $atom_object->proton,
                "electron" => $atom_object->electron,
                "neutron" => $atom_object->neutron
            ]);
        }

        //Atom does not exists
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
