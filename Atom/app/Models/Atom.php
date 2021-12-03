<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    public function __construct(int $id)
    {
        //Proccesses
        $atom_object = Atom::where("id", $id);

        if ($atom_object->exists()) {
            //Getting values
            $name = $atom_object->get("name");
            $atomic_number = $atom_object->get("atomic_number");
            $atomic_mass = $atom_object->get("atomic_mass");
            $symbol = $atom_object->get("symbol");
            $stability = $atom_object->get("stability");
            $isotopes = $atom_object->get("isotopes");
            $proton = $atom_object->get("proton");
            $electron = $atom_object->get("electron");
            $neutron = $atom_object->get("neutron");

            //Initializing values
            $this->id = $id;
            $this->name = $name;
            $this->atomic_number = $atomic_number;
            $this->atomic_mass = $atomic_mass;
            $this->symbol = $symbol;
            $this->stability = $stability;
            $this->isotopes = $isotopes;
            $this->proton = $proton;
            $this->electron = $electron;
            $this->neutron = $neutron;
        }
    }

    public function Id()
    {
        return $this->id;
    }

    public function Name()
    {
        return $this->name;
    }

    public function Atomic_Number()
    {
        return $this->atomic_number;
    }

    public function Atomic_Mass()
    {
        return $this->atomic_mass;
    }

    public function Symbol()
    {
        return $this->symbol;
    }

    public function Stability()
    {
        return $this->stability;
    }

    public function Isotopes()
    {
        return $this->isotopes;
    }

    public function Proton()
    {
        return $this->proton;
    }

    public function Electron()
    {
        return $this->electron;
    }

    public function Neutron()
    {
        return $this->neutron;
    }

    //Static Methods
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
            return $atom->get("name");
        } else {
            return false;
        }
    }
}
