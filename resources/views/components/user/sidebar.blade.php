
  <div class="sidebar active">
    <div class="logo_content">
      <div class="logo-user">
        <div class="logo-img-user">
            <img src="../images/logo2.png" alt="">
            <div class="logo-back-line"></div>
        </div>
      </div>
      <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav_list">
      
      <li>
        <a href="#" >
        <i class='bx bxs-dashboard' ></i>
          <span class="links_name ">Dashboard</span>
        </a>
        <span class="tooltip">Dashboard</span>
      </li>
      <li>
        <a href="#" class="active-link">
        <i class='bx bxs-user-detail' ></i>
          <span class="links_name">Shaxsiy ma'lumotlar</span>
        </a>
        <span class="tooltip">Shaxsiy ma'lumotlar</span>
      </li>
     
      <li>
        <a href="#">
            <i class='bx bxs-bulb' ></i>
          <span class="links_name">G'oyalar</span>
        </a>
        <span class="tooltip">G'oyalar</span>
      </li>
      <li>
        <a href="#">
        <i class='bx bxs-user-voice'></i>
          <span class="links_name">Vakansiyalar</span>
        </a>
        <span class="tooltip">Vakansiyalar</span>
      </li>
      
    </ul>
    <div class="line-sidebar"></div>
    
   
  </div>
 



<script>
   let btn = document.querySelector("#btn");
   let sidebar = document.querySelector(".sidebar");

   btn.onclick = function() {
     sidebar.classList.toggle("active");
     if(btn.classList.contains("bx-menu")){
       btn.classList.replace("bx-menu" , "bx-menu-alt-right");
     }else{
       btn.classList.replace("bx-menu-alt-right", "bx-menu");
     }
   }
  </script>
