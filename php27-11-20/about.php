<?php
    // String
    var_dump('About');
    echo "<br/>";

    var_dump("About");
    echo "<br/>";

    var_dump("Collin's code");
    echo "<br/>";

    var_dump("Collin's \"awesome\"code");
    echo "<br/>";

    var_dump("Collin " . "is " . "awesome");
    echo "<br/>";

    // Nummerkes
    var_dump(10);
    echo "<br/>";

    var_dump(10.5);
    echo "<br/>";

    // Boolean (true or false)
    var_dump(true);
    echo "<br/>";

    var_dump(false);
    echo "<br/>";

    // Variables
    $city;
    $name = "Collin Van der Vorst";
    $isTeacher = true;
    $age = 29;

    var_dump($name);
    echo "<br/>";

    var_dump($isTeacher);
    echo "<br/>";

    var_dump($age);
    echo "<br/>";

    const APPNAME = "collin app";
    var_dump(APPNAME);

    $userList = ["Collin", "Lisa", "Marnix"];
    echo "<br/>";
    echo "<p>" . $userList[0] . "</p>";

    $colorList = array("orange", "green", "red");
    echo "<br/>";
    echo "<p>" . $colorList[0] . "</p>";

    $users = array (
        "id_collin" => array(
            "name" => "Van der Vorst",
            "firstname" => "Collin",
            "age" => 29,
        ),
        "id_lisa" => array(
            "name" => "Van der Vorst",
            "firstname" => "Lisa",
            "age" => 29,
        ),
    );

    var_dump($users["id_collin"]["age"]);

    // gewone array
    foreach($colorList as $color) {
        echo $color;
        echo "<br/>";
    }

    // associated array
    foreach($users as $userid => $user) {
        var_dump($userid . " = " . $user["name"] . " " . $user["firstname"]);
        echo "<br/>";

        foreach($user as $value) {
            echo $value;
            echo "<br/>";
        }
    }