<header class="sidebar">
    <div class="logo_details">
        <a href="{{ Route('home-nurses') }}">
            <i class='bx bxs-baby-carriage'></i>
        </a>
        <div class="logo_name"> <a href="{{ Route('home-nurses') }}">DAILY BABY</a></div>
    </div>
    <i class='bx bx-menu text-[#FFD6DD] sm:text-inherit' id="btn" ></i>
    
    <ul class="nav-list">
      <li>
        <a href='{{ Route('home-nurses') }}'>
            <i class='bx bx-user'></i>
          <span class="links_name">Section</span>
        </a>
         <span class="tooltip">Section</span>
      </li>
      <li>
       <a href="#">
        <i class='bx bx-calendar'></i>
         <span class="links_name">Calendrier</span>
       </a>
       <span class="tooltip">Calendrier</span>
     </li>
     <li>
       <a href='{{ Route('inventaire-nurses') }}'>
        <i class='bx bx-shopping-bag'></i>
         <span class="links_name">Inventaire</span>
       </a>
       <span class="tooltip">Inventaire</span>
     </li>
     <li>
       <a href="#">
        <i class='bx bx-chat'></i>
         <span class="links_name">Messagerie</span>
       </a>
       <span class="tooltip">Messagerie</span>
     </li>

     <li class="profile">
         <div class="profile-details">
           <div class="name_job">
             <div class="name">Sysy</div>
             <div class="job">Puéricultrice</div>
           </div>
         </div>
         <a href="/">
             <i class='bx bx-log-out' id="log_out" ></i>
         </a>
     </li>
    </ul>
  </header>
