<?php

$roomcount = 100;
echo "Total rooms in the hotel are :".$roomcount ."<br>" ;

$room = array(
    array("RoonmNo" => $roomcount--, "Name" => "Abdul Moid", "persons" => 2, "Address" => "XYZ place", "days" => 3),
    array("RoonmNo" => $roomcount--, "Name" => "Asaad", "persons" => 2, "Address" => "i don't place", "days" => 2)
);


function addGuest(&$room, $roomcount, $name, $persons, $address, $days) {
    $newGuest = array(
        "RoonmNo" => $roomcount--,
        "Name" => $name,
        "persons" => $persons,
        "Address" => $address,
        "days" => $days
    );
    $room[] = $newGuest;
}

addGuest($room, $roomcount, "Sumit", 1, "Some Place", 4);


function updateGuestDetails(&$room, $roomNo, $name = null, $persons = null, $address = null, $days = null) {
    foreach ($room as &$guest) {
        if ($guest["RoonmNo"] == $roomNo) {
            if ($name !== null) $guest["Name"] = $name;
            if ($persons !== null) $guest["persons"] = $persons;
            if ($address !== null) $guest["Address"] = $address;
            if ($days !== null) $guest["days"] = $days;
            break;
        }
    }
}

updateGuestDetails($room, 98, "shubahm", 2, "new address added", 5);


function viewAllReservations($room) {
    echo "<h2> Reservation Details </h2>";
    echo "<table border = '2px'>";
    echo "<tr>
        <th>Room No</th>
        <th>Name</th>
        <th>persons</th>
        <th>Address</th>
        <th>Days</th>
      </tr>";
    
    foreach ($room as $bookedRooms) {
        echo "<tr>";
        foreach ($bookedRooms as $val) {
            echo "<td> $val </td>";
        }
        echo "</tr>";
    }
}

viewAllReservations($room);

function roomAvailability($roomcount) {
    $count = $roomcount - 1;
    echo "Total Available room count : " .$count;
}


roomAvailability($roomcount);

function roomReport($room, $roomcount) {
    roomAvailability($roomcount);
    viewAllReservations($room);

}

roomReport($room, $roomcount);