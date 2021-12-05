<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atom extends Model
{
    use HasFactory;

    //Methods

    //Static Methods
    public static function atom_exists(int $id)
    {
        return Atom::find($id)->exists();
    }

    public static function getAtomById(int $id)
    {
        //Variables
        $atom = Atom::find($id);

        //Proccesses
        if ($atom->exists()) {
            return $atom;
        } else {
            return false;
        }
    }
}
