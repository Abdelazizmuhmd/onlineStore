<?php

require_once("../view/View.php");

class viewCheckOut extends View{

function userdetails(){
   echo" 
   <div class='step__sections'>
      
   <div class='section section--contact-information'>
     <div class='section__header'>
       <div class='layout-flex layout-flex--tight-vertical layout-flex--loose-horizontal layout-flex--wrap'>
         <h2 class='section__title layout-flex__item layout-flex__item--stretch' id='main-header' tabindex='-1'>
           Contact information
         </h2>
   
           <p class='layout-flex__item'>
             <span aria-hidden='true'>Already have an account?</span>
             <a data-trekkie-id='have_an_account_login_link' href=''>
               <span class='visually-hidden'>Already have an account?</span>
               Log in
   </a>        </p>
       </div>
     </div>
     <div class='section__content' data-section='customer-information' >
           <div class='fieldset'>
             <div  class='field field--required'>
               <div class='field__input-wrapper'>
                 <input value='".$this->model->getEmail()."' placeholder='Email' aria-required='true' class='field__input' size='30' type='email' name='checkoutemail' id='checkout_email' />
               </div>
   </div>        </div> 
   
           <div class='fieldset-description' data-buyer-accepts-marketing>
             <div class='section__content'>
               <div class='checkbox-wrapper'>
     <div class='checkbox__input'>
       <input name='checkout[buyer_accepts_marketing]' type='hidden' value='0' /><input class='input-checkbox' data-backup='buyer_accepts_marketing' data-trekkie-id='buyer_accepts_marketing_field' type='checkbox' value='1' name='checkout[buyer_accepts_marketing]' id='checkout_buyer_accepts_marketing' />
     </div>
     <label class='checkbox__label' for='checkout_buyer_accepts_marketing'>
       Keep me up to date on news and exclusive offers
   </label></div>
   
             </div>
           </div>
     </div> 
   </div> 
   
   
     <div class='section section--shipping-address' data-shipping-address>
       <div class='section__header'>
         <h2 class='section__title'>
             Shipping address
         </h2>
       </div>
   
       <div class='section__content'>
           
           <div class='fieldset'>
             <div class='address-fields' data-address-fields>
    
   
                 
                 
     <div class='field field field--required' >
       <div class='field__input-wrapper'>
         <input value='".$this->model->getfirstName()."'  placeholder='First Name'  class='field__input'  type='text'id='firstName' maxlength='20' required  />
       </div>
   </div>
                 
                 
                 
     <div class='field field field--required' >
       <div class='field__input-wrapper'>
         <input value='".$this->model->getlastName()."' placeholder='Last name'   class='field__input' type='text'id='lastName'maxlength='20' required />
       </div>
         
             
                 
     <div  class='field field--required'>
       <div class='field__input-wrapper'>
           <input value='".$this->model->getAddress()."' placeholder='Address'  class='field__input'  type='text' id='adress' maxlength='20' required />
       </div>
     </div>
                 
       <div  class='field field--optional'>
         <div class='field__input-wrapper'>
           <input value='".$this->model->getApartmant()."' placeholder='Apartmant'  class='field__input'  type='text' id='apartment'maxlength='20' required  />
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
         <input value='".$this->model->getCity()."' placeholder='City'  class='field__input'  type='text' id='city' maxlength='20' required />
       </div>
   </div>
                 
                 
   
    
     
                 
                 
       <div  class='field field--optional'>
         <div class='field__input-wrapper field__input-wrapper--icon-right'>
           <input value='".$this->model->getPhone()."' placeholder='phone'   class='field__input field__input--numeric'  type='tel' id='phoneNumber' maxlength='11' required/>
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

      <button name='button' type='submit' id='continue_button' class='step__footer__continue-btn btn' onclick ='return validate()' >
        <span class='btn__content' >Continue to shipping</span>
       </button>
       </div>

     ";
 }
 
  

}

?>
<head>
<script src="../js/check_Out.js" type="text/javascript" ></script> 
</head>



