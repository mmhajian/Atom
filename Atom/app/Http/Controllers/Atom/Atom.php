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
        $atom_exists = AtomModel::where("name", $str)->exists();

        //Proccesses

        //Atom exists
        if ($atom_exists) {
            return view("atom.atom", [
                "atom" => $atom,
            ]);
        }

        //Atom not exists
        else {
            return view("atom.found", [
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
