
<?php

include './includes/header.php';

if($_SERVER["REQUEST_METHOD"] == "POST")
    {
    $title="Query";
    $name= $_POST["Name_Query"];
    $email= $_POST["Email_Query"];
    $mobile= $_POST["Contact_Query"];
    $message= $_POST["Mail_Query"];

 // send the email
    
 header("Location:Query.php?status=thanks");
 exit;

}
?>

<table>
    <tr height="60px"> </tr>
    <tr height="500px">
        <td class="blank_f"> </td>
        <td class="center_f">
            <?php
                        if(isset($_GET["status"]) AND $_GET["status"]=="thanks"){
                   ?>
             
            <h3>Thank you for your Query. W&rsquor;ll contact you soon!!!</h3>
             <a href="index.php"><button id='Home_button' class='button'> Home </button></a>
                   
            <?Php  }else{   ?>
            
            <font  style="font-style: oblique; font-family:monospace;" > Enter your query below,
            <br>We will contact you soon!!!<br><br><br></font>
            
            <form id="Query_email" name="Query" method="post" action="Query.php">
            
                <table id="query" class="form">  
                    
                    <tr>
                        <th>
                              <label for="Name_Query" >Name</label> 
                        </th>
                        <td>
                           <input type="text" name="Name_Query" id="Name_Query" width="400px" placeholder="NAME" class="text" > 
                           
                        </td>
                    </tr>
                    
                    <tr>
                        <th>
                            <label for="Email_Query">Email</label>  
                        </th>
                        <td>
                            <input type="text" name="Email_Query" id="Email_Query" placeholder="Email" class="text">
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="Contact_Query">Contact</label>  
                        </th>
                        <td>
                            <input type="text"name="Contact_Query" id="Contact_Query" placeholder="Mobile Number" class="text" >
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="Mail_Query">Message</label>  
                        </th>
                        <td>
                           <textarea name="Mail_Query" id="Mail_Query" class="text" > </textarea> <br><br>
                        </td>
                    </tr>                
                         
                </table>
                    
                <a href="./index.php"> <button id='Submit' class='button'> SUBMIT </button></a>
            
            </form>
            <br><br>
            <?php } ?>
        
        </td>
        <td class="blank_f"> </td>
    </tr>
</table>

<?php  include './includes/footer.php';  ?>