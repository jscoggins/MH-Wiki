<?php

echo '<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.1/css/jquery.dataTables.css">

<!-- jQuery -->
<script type="text/javascript" charset="utf8" src="//code.jquery.com/jquery-1.10.2.min.js"></script>

<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.1/js/jquery.dataTables.js"></script>
';

echo '<link rel="stylesheet" href="CSS/main.css" type="text/css">

<script type="text/javascript" charset="utf8" src="JS/tables.js"></script>';

class Weapon {
    public $name;
    public $attack;
    public $elementalAttack;
    public $element;
    public $totalAttack;
    public $sharpness;
    public $slots;
    public $rarity;
    public $affinity;
    public $defense;

    function __construct($stats){
        foreach($stats as $key => $value){
            $this->{$key} = $value;
        }
        $this->totalAttack = $this->attack + $this->elementalAttack;
        return $this;
    }
}

function displayWeapons($weapons)
{
    echo '<table id="weapon" class="display">';
    echo '<thead>
            <tr>
                <th>Name</th>
                <th>Attack</th>
                <th>Elemental Attack</th>
                <th>Element</th>
                <th>Total Attack</th>
                <th>Sharpness</th>
                <th>Slots</th>
                <th>Rarity</th>
                <th>Affinity</th>
                <th>Defense</th>
            </tr>
        </thead>';
    foreach($weapons as $weapon) {
        echo '<tr>';
        foreach($weapon as $property) {
            echo '<td> ' . $property . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}
$weaponStats = array();
$weaponStats[name] = 'Test';
$weaponStats[attack] = 125;
$weaponStats[element] = 'fire';
$testWeapon = new Weapon($weaponStats);
$weaponStats2[name] = 'Weapon';
$weaponStats2[attack] = 225;
$weaponStats2[elementalAttack] = 100;
$weaponStats2[element] = 'water';
$testWeapon2 = new Weapon($weaponStats2);
$testWeapons = array($testWeapon, $testWeapon2);
//for()
displayWeapons($testWeapons);