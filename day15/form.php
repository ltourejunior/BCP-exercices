<?php

if (!empty($_POST)){
    // store stupp to database
    //PRG post-redirect get
header('location: form.php'); // redirect the user to a get request 
    echo 'adding product ' . $_POST['product'] . ', ';

    if (isset($_POST['color'])){
        echo $_POST['color'];
    }

if (isset($_POST['really']) && $_POST['really'] == 'on'){
    echo  ', I really mean it'; 
}
};
$_FILES['afile']['name'];
$_FILES['afile']['tmp_name'];// tempory place where the files is located

move_uploaded_file($_FILES['afile']['tmp_name'], $destination);


?>

<form enctype="multipart/form-data" action="" method="post">
    <!--Text input -->
    Product: 
    <input type="text" name="product" placeholder="Product"> <!--try it  -->
    <!--checkbox -->
     <br>
     Amount: 
    <input type="text" name="amount">
    <br>
    <select name="country">
        <option value="CZ">Czech Republic</option>
        <option value="BZ">Banana Republic</option>
        <option value="KZ">Kiwi Republic</option>
    </select>
    <br>
    <input type="checkbox" name="really" id="reallycheck"><label for="reallycheck">Really?</label>
     <br>
    Color: 
    <input type="radio" name="color" value="black"id="color-black"><label for="color-black" checked>black</label>
   
    <input type="radio" name="color" value="white" id="color-white"><label for="color-white">white</label>
 <br>
    Is you purchase experience was pleasant? 
    <input type="radio" name="experience" value="Yes">Yes
    <input type="radio" name="experience" value="No">No 
     
     <br>
     <hr>
     Would you like to explain your choice? 
     <textarea name="comment" rows="" cols=""></textarea>
     <br>
     File
     <input type="file" name="afile" value="">
     <input type="submit" name="" value="send">
     <br>
    <input type="submit" value="Submit this">
    <button type=""><strong>SUB<em>mi</em>t</strong></button>
</form>

