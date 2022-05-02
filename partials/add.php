<?php
//Dwie zmienne to wyświetlania komunikatów
$message = ''; 
$error = '';
//Poniższy schemat możnaby zrobić prawdopodobnie poprzez użycie operatora "OR" 
 if(isset($_POST["submit"]))  //Jeśli submit to 
 {  
      if(empty($_POST["name"]))  //Jeśli pole "name" jest puste to:
      {  
           $error = "<label class='text-danger'>Enter Name</label>";  //Wyświetl komunikat
      }  
      else if(empty($_POST["username"]))  
      {  
           $error = "<label class='text-danger'>Enter username</label>";  
      }  
      else if(empty($_POST["address"]))  
      {  
           $error = "<label class='text-danger'>Enter address</label>";  
      }  
      else if(empty($_POST["zipcode"]))  
      {  
           $error = "<label class='text-danger'>Enter zipcode</label>";  
      }  
      else if(empty($_POST["city"]))  
      {  
           $error = "<label class='text-danger'>Enter city</label>";  
      }  
      else if(empty($_POST["phone"]))  
      {  
           $error = "<label class='text-danger'>Enter phone</label>";  
      }  
      else if(empty($_POST["company"]))  
      {  
           $error = "<label class='text-danger'>Enter company</label>";  
      }  
      else  
      {  
        if(file_exists('./dataset/users.json'))//Jeśli plik istnieje to:
        {
                $current_data = file_get_contents('./dataset/users.json');   //Pobranie wartości JSON 
                $array_data = json_decode($current_data, true); 
$extra = array(
'name'=> $_POST['name'], 
'username' =>$_POST['username'], //Dodaj username w JSON pobierając dane z formularza z pozycji "username" metodą POST
'email' => $_POST['email'],
'address' =>array('street'=> $_POST['address'], 'zipcode'=> $_POST['zipcode'],'city'=> $_POST['city']),
'phone' => $_POST['phone'],
'company' =>array('name'=> $_POST['company']),
);

                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('./dataset/users.json', $final_data))  //Dodaj zebrane wartości do pliku JSON
                {  
                     $message = "<label class='text-success'>File Appended Success fully</p>";  //Wyświetl komunikat o poprawnym dodaniu 
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  //W innym wypadku wyświetl komunikat błędu
           }  
      }  
 }  
 ?>  