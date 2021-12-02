<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;

class Atom extends Model
{
    use HasFactory;

    //Private
    private $id;

    private $name;

    private $atomic_number;

    private $atomic_mass;

    private $symbol;

    private $stability;

    private $isotopes;

    private $proton;

    private $electron;

    private $neutron;


    //Methods

    //Public Methods

    //Static Methods
    public function __construct(int $id)
    {
        //
    }

    public static function atom_exists(int $id)
    {
        return Atom::where("id", $id)->exists();
    }

    public static function getAtomNameById(int $id)
    {
        //Variables
        $atom = Atom::where("id", $id);

        //Proccesses
        if ($atom->exists()) {
            return $atom->get();
        }
        else {
            return false;
        }
    }
}
