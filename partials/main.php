<div id="table">
 
<table><!-- Stworzenie tabeli -->
    <tr id="info">
        <th>Name</th>
        <th>Username</th>
        <th>Email</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Company</th>
        <th>Action</th>
    </tr>
    <?php
$json_data = file_get_contents("./dataset/users.json"); //Pobranie pliku JSON
$users = json_decode($json_data, true);
$index=0; //Zmienan indesx ustawiona na 0
if(count($users) != 0){ //Jeśli różna od zera
    foreach($users as $user){ //Petla do wypisywania całej zawartośći pliku JSON 
    ?>
    <tr id="list"><!-- Przypisanie wartości z pliku JSON do odpowiednich miejsc w HTML -->
        <td><strong><?php echo $user['name'] ?></strong></td>
        <td><strong><?php echo $user['username'] ?></strong></td>
        <td><a href='mailto:<?php  echo $user['email'] ?>'><?php echo $user['email'] ?></a></td>
        <td><?php echo $user['address']['street'],", ",$user['address']['zipcode'],", ",$user['address']['city'] ?></td>
        <td><?php echo $user['phone']?><</td>
        <td><?php echo $user['company']['name'] ?></td>
        <td><a href="./partials/remove.php?idd=<?php echo $index?>"><button id="options">Remove</button></a></td>
    </tr>
    <?php
        $index = $index +1; //Zwiększaj index o 1 
    }} // Pętla zakończy się po dodaniu ostatniego usera.
    ?> 
            </table>
        </div>  


