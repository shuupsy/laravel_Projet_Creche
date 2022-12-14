<nav class="sidebar">
    <div class="logo_details">
        <a href="/">
            <i class='bx bxs-baby-carriage'></i>
        </a>
        <div class="logo_name"><a href="/">DAILY BABY </a></div>
    </div>
    <i class='bx bx-menu text-[#FFD6DD] sm:text-inherit' id="btn" ></i>

    <ul class="nav-list">
      <li>
        <a href="#">
            <i class='bx bx-task'></i>
          <span class="links_name">Journal</span>
        </a>
         <span class="tooltip">Journal</span>
      </li>

      <li>
       <a href="{{ Route('calendrier')}}">
        <i class='bx bx-calendar'></i>
         <span class="links_name">Calendrier</span>
       </a>
       <span class="tooltip">Calendrier</span>
     </li>

     <li>
         <a href="{{route('ProfilEnfant')}}">
            <i class='bx bx-user'></i>
           <span class="links_name">Profil Enfant</span>
         </a>
         <span class="tooltip">Profil Enfant</span>
     </li>
     <li>
       <a href="{{route('inventaire')}}">
        <i class='bx bx-shopping-bag'></i>
         <span class="links_name">Inventaire</span>
       </a>
       <span class="tooltip">Inventaire</span>
     </li>
     <li>
       <a href="{{ Route('administration')}}">
        <i class='bx bx-file'></i>
         <span class="links_name">Administration</span>
       </a>
       <span class="tooltip">Administration</span>
     </li>
     <li>
       <a href="{{route("messagerieParents")}}">
        <i class='bx bx-chat'></i>
         <span class="links_name">Messagerie</span>
       </a>
       <span class="tooltip">Messagerie</span>
     </li>
     <li>
       <a href="#">
        <i class='bx bxs-bookmarks' ></i>
         <span class="links_name">Règlement Intérieur</span>
       </a>
       <span class="tooltip">Règlement Intérieur</span>
     </li>

     <li class="profile">
         <div class="profile-details">
           <div class="name_job">
             <div class="name">Sysy</div>
             <div class="job">Parent de ...</div>
           </div>
         </div>
         <a href="{{ Route('home-nurses') }}">
            <i class='bx bx-log-out' id="log_out" ></i>
        </a>
     </li>
    </ul>
  </nav>
