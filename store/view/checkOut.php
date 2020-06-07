<?php

require_once("../view/View.php");

class viewCheckOut extends View{

function userdetails(){
   echo" 
     <div class='section section--shipping-address' data-shipping-address>
       <div class='section__header'>
         <h2 class='section__title'>
             Shipping address
         </h2>
       </div>
   
       <div class='section__content'>
           
           <div class='fieldset'>
             <div class='address-fields' data-address-fields>
    
   
                 <form action='../public/checkout.php?action=makeorder' method='POST'>
                 
     <div class='field field field--required' >
       <div class='field__input-wrapper'>
         <input value='".$this->model->getfirstName()."' name='firstname'  placeholder='First Name'  class='field__input'  type='text'id='firstName' maxlength='20' onkeyup='validate()' required   />
         <p id='Fname' style='color:red;'></p>
         </div>
   </div>
                 
                 
                 
     <div class='field field field--required' >
       <div class='field__input-wrapper'>
         <input value='".$this->model->getlastName()."'name='lastname' placeholder='Last name'   class='field__input' type='text' id='lastName'maxlength='20' onkeyup='validate()' required/>
         <p id='Lname' style='color:red;'></p>

         </div>
            <div class='field field field--required' >
       <div class='field__input-wrapper'>
         <input value='".$this->model->getEmail()."' name='email' size='30' type='email'  id='checkout_email' placeholder='Email'  class='field__input'  type='text' onkeyup='validate()'  required />
         <p id='mail' style='color:red;'></p>

         </div>
   </div>
         
             
                 
     <div  class='field field--required'>
       <div class='field__input-wrapper'>
           
       <input value='".$this->model->getAddress()."' name='address' placeholder='Address'  class='field__input'  type='text' id='adress' maxlength='20' onkeyup='validate()' required />
       <p id='Adress' style='color:red;'></p>

       </div>
     </div>
                 
       <div  class='field field--optional'>
         <div class='field__input-wrapper'>
           <input value='".$this->model->getApartmant()."' name='apartmant' placeholder='Apartmant'  class='field__input'  type='text' id='apartment'maxlength='20' onkeyup='validate()' required   />
           <p id='Apartment' style='color:red;'></p>

           </div>  
   </div>
           <div class='field--third field field--required' >
       <div class='field__input-wrapper field__input-wrapper--select'>
   <select  class='field__input field__input--select' >
   <option  value='egypt'>EGYPT</option>
           </select>
           
         
       </div>
   </div>
                 
     <div  class='field field--required'>
       <div class='field__input-wrapper'>
         <input value='".$this->model->getCity()."' name='city' placeholder='City'  class='field__input'  type='text' id='city' maxlength='20' onkeyup='validate()' required />
         <p id='City' style='color:red;'></p>

         </div>
   </div>
                 
                 
   
    
       <div  class='field field--optional'>
         <div class='field__input-wrapper field__input-wrapper--icon-right'>
           <input value='".$this->model->getPhone()."' name='phone' placeholder='phone'   class='field__input field__input--numeric'  type='tel'id='phoneNumber' maxlength='11' onkeyup='validate()' required />
           <p id='Phone' style='color:red;'></p>

           <div class='field__icon'>
           
         </div>
   </div>
       
       
   </div>
   
   
              
               </div>
           </div> 
       </div> 
     </div>
   
     </div>
       <div class='step__footer' data-step-footer>

      <button onclick ='return validate()' class='step__footer__continue-btn btn' >
        <span class='btn__content' >Make Order</span>
       </button>
       </div>
</form>
     ";
 }
 
  

}

?>



