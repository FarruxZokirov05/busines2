@extends('layouts.app')

@section('content')
   <x-sidebar/>
   <div class="home_content ">
   <div class="log-out-btn">
        <a href="#">Chiqish <span class="iconify" data-icon="feather:log-out" data-inline="false"></span></a>
    </div>
      <div class="user_detail container mx-auto">
         <h1>Shaxsiy kabinet</h1>
         <div class="details_users">
            <div class="details_head">
               <div class="user-img">
                  <img src="../images/img3.png" alt="">
               </div>
               <h3>Alimova Shaxnoza</h3>
            </div>
            <div class="details_body">
               <div class="detail_rows">
                  <div class="text-row-one">
                      <p>Tug’ilgan joyi:</p>
                  </div>
                  <div class="text-row-two">
                     <h4>Qashqadaryo viloyati chiroqchi tumani</h4>
                  </div> 
                  
               </div>
               <div class="detail_rows">
                  <div class="text-row-one">
                     <p>Yoshi:  </p>
                  </div>
                  <div class="text-row-two">
                     <h4>25</h4>
                  </div>
                  
                  
               </div>   
               <div class="detail_rows">
                  <div class="text-row-one">
                      <p>ISH / O’qish / Faoliyat:  </p>
                  </div>
                  <div class="text-row-two">
                     <h4>Muhammad al-xorazmiy nomidagi Tatu</h4>
                  </div>
                  
                  
               </div>  
               <div class="detail_rows">
                  <div class="text-row-one">
                     <p>YORdamim tegadi: </p>
                  </div>
                  <div class="text-row-two">
                      <h4>Dasturchilik sohasida . html css java script, bootsrapt</h4>
                  </div>
                  
                  
                 
               </div>
               <div class="detail_rows">
                  <div class="text-row-one">
                     <p>Telefon raqam: </p>
                  </div>
                  <div class="text-row-two">
                     <h4>+99989898987</h4>
                  </div>         
                  
                  
               </div>    
            </div>
            <div class="btn-edit">
               <a class="edit-btn">O'zgartirish <i class='bx bx-edit-alt'></i></a>
            </div>
           
            

         </div>
      </div>      
  </div>
@endsection