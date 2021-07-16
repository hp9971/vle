    <?php include './includes/header.php'; ?>


<table>
    
<tr height="30px"> </tr>
    

    <tr height="500px">
        
   
 <td class="blank_f"></td>
    
  
  <td class="center_f"> 
     
   <form id="Registration" name="Registration" method="post" action="regis.php">
     
   <table class="form">
            
            
<tr >
                
             
   <td width="40%">Name                        :  
                </td>
        
        <td width="60%">
                 
   <input type="text" placeholder="NAME" name="t1" width="400px" class="text">
                </td>
   
         </tr>
            
         
   <tr>
          
      <td>Date Of Birth               :
                </td>
    
            <td width="60%">
                    <input type="date" placeholder="DD/MM/YYYY" name="t2" width="400px" class="text">
                </td>
      
      </tr>
      
      <tr>
                <td>Father's name               :
                </td>
     
           <td width="60%">
                    <input type="text" placeholder="Father's Name"  name="t3" width="400px" class="text">
                </td>
     
       </tr>
        
    <tr>
                <td>Mother's name               :
                </td>
         
       <td width="60%">
                    <input type="text" placeholder="Mother's Name" name="t4" width="400px" class="text">
                </td>
      
      </tr>
         
   <tr>
                <td>Address                     :
                </td>
              
  <td width="60%">
                    <textarea placeholder="Address" name="t5" width="400px" class="text"></textarea>
                </td>
            </tr>
     
       <tr>
                <td>Mobile                      :
                </td>
              
  <td width="60%">
                    <input type="text" placeholder="Mobile" name="t6" width="400px" class="text">
                </td>
            </tr>
     
       <tr>
           
     <td>Parent Mobile               :
                </td>
          
      <td width="60%">
                    <input type="text" placeholder="Parent's Mobile" name="t7" width="400px" class="text">
                </td>
            </tr>
    
        <tr>
              
  <td>Email ID                    :
                </td>
         
       <td width="60%">
                    <input type="text" placeholder="Email ID" name="t8" width="400px" class="text">
                </td>
            </tr>
        
    <tr>
                <td>Gender                      :
                </td>
   
             <td width="60%">        
                         
                      <input type="radio" name="g1" value="male"id="male" />
           
            <label for="male">Male</label>       
                   
                      <input type="radio" name="g1" value="female" id="female" />
                
       <label for="female">Female</label>         
                         
                </td>
            </tr>
        
    <tr>
            
    <td>Password                    :
                </td>
         
       <td width="60%">
                    <input type="password" name="t9" width="400px" class="text">
                </td>
     
       <tr>
         
       <td>Re-enter Password           :
                </td>
        
        <td width="60%">
                    <input type="password" name="t10" width="400px" class="text">
                </td>
            </tr>
    
        <tr>
            
    <td>Courses like to Enroll into :
                </td>
            
    <td width="60%">
                    
                    <input id="course1" name="t11" type="checkbox" width="400px" >
<lable>Cpp </lable>
    
                <input id="course2" type="checkbox" width="400px" ><lable>Java</lable>
         
           <input id="course3" type="checkbox" width="400px" ><lable> PhP</lable>
                </td>
            </tr>
            
    
        </table>
      
  </form>

     
   <a href="./index.php"> <button id='Submit' class='button'> SUBMIT </button></a>
    
 
   </td>
     
 
    <td class="blank_f"></td>
    
    </tr>
    
    
<tr>
</tr>
</table>


<?php include './includes/footer.php';  ?>