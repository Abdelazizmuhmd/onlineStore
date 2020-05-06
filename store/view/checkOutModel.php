<?php

require_once("View.php");

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
               <label class='field__label' for='checkout_email'>Email</label>
               <div class='field__input-wrapper'>
                 <input value=".this->model->getEmail()." autocapitalize='off' spellcheck='false' autocomplete='shipping email' data-trekkie-id='email_field' data-autofocus='true' data-backup='customer_email' aria-describedby='checkout-context-step-one error-for-email' aria-required='true' class='field__input' size='30' type='email' name='checkout[email]' id='checkout_email' />
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
    
   
                 
                 
     <div class='field--half field field--required' >
       <label class='field__label' >First name</label>
       <div class='field__input-wrapper'>
         <input value=".this->model->getfirstName()."   class='field__input'  type='text'  />
       </div>
   </div>
                 
                 
                 
     <div class='field--half field field--required' >
       <label class='field__label' >Last name</label>
       <div class='field__input-wrapper'>
         <input value=".this->model->getlastName()."   class='field__input' type='text' />
       </div>
         
         
         
   </div>
       <div  d class='field field--optional'>
         <label class='field__label' >Company (optional)</label>
         <div class='field__input-wrapper'>
           <input value='Company (optional)'  class='field__input'  type='text'  />
         </div>
   </div>
                 
                 
                 
     <div  class='field field--required'>
       <label class='field__label'>Address</label>
       <div class='field__input-wrapper'>
           <input value=".this->model->getAdress()." class='field__input'  type='text'  />
       </div>
     </div>
                 
       <div  class='field field--optional'>
         <label class='field__label' >Apartment, suite, etc. (optional)</label>
         <div class='field__input-wrapper'>
           <input value=".this->model->getApartmant()."  class='field__input'  type='text'  />
         </div>  
   </div>
           <div class='field--third field field--required' >
       <label class='field__label' >Country/Region</label>
       <div class='field__input-wrapper field__input-wrapper--select'>
   <select  class='field__input field__input--select' >
   <option  value='egypt'>EGYPT</option>
           </select>
           
         
       </div>
   </div>
                 
     <div  class='field field--required'>
       <label class='field__label' >City</label>
       <div class='field__input-wrapper'>
         <input value=".this->model->getCity()." class='field__input'  type='text'  />
       </div>
   </div>
                 
                 
   
    
     
                 
                 
       <div  class='field field--optional'>
         <label class='field__label' >Phone (optional)</label>
         <div class='field__input-wrapper field__input-wrapper--icon-right'>
           <input value=".this->model->getPhone()."  class='field__input field__input--numeric'  type='tel' />
           <div class='field__icon'>
           
         </div>
   </div>
       
       
   </div>
   
   
              
               </div>
           </div> 
       </div> 
     </div>
   
     </div>
     ";
 }
 
  function productOutput(){
    echo"
   <tr class='product' data-product-id='4396731957282' data-variant-id='31415765139490' data-product-type='Sweater' data-customer-ready-visible>
            <td class='product__image'>
              <div class='product-thumbnail' >
    <div class='product-thumbnail__wrapper'>
      <img alt='I'm fine (phr.) - White / S' class='product-thumbnail__image' src='' />
    </div>
      <span class='product-thumbnail__quantity' aria-hidden='true'>1</span>
  </div>
  
            </td>
            <th class='product__description' scope='row'>
              <span class='product__description__name order-summary__emphasis'>I&#39;m fine (phr.)</span>
              <span class='product__description__variant order-summary__small-text'>White / S</span>
  
  
            </th>
            <td class='product__quantity visually-hidden'>
              1
            </td>
            <td class='product__price'>
              <span class='order-summary__emphasis'>�30,00</span>
            </td>
          </tr>
          ";
  }

}

?>



