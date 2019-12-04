<nav class="sidebar-nav">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{route('anasayfa')}}"><i class="icon-speedometer"></i> Anasayfa <span class="badge badge-info">NEW</span></a>
          </li>

          <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Personel İşlemleri</a>
            <ul class="nav-dropdown-items">
            <li class="nav-item">
                <a class="nav-link" href="{{route('personal-info-add')}}"><i class="icon-puzzle"></i> Personel Ekle</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('personal-info')}}"><i class="icon-puzzle"></i> Personel Bilgileri</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('overtime-info')}}"><i class="icon-puzzle"></i>Mesai Bilgileri</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('salary-info')}}"><i class="icon-puzzle"></i>Maaş Bilgileri</a>
              </li>
            </ul>
          </li>
          <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href=><i class="icon-cursor"></i> Departman</a>
            <ul class="nav-dropdown-items">
              <li class="nav-item">
                <a class="nav-link" href="{{route('department-add')}}"><i class="icon-cursor"></i>Departman Ekle</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="{{route('designation-add')}}"><i class="icon-cursor"></i>Branş ve Görevi Ekle</a>
              </li>
            </ul>
          </li>
          <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-energy"></i>İzin İşlemleri</a>
            <ul class="nav-dropdown-items">
              <li class="nav-item">
                <a class="nav-link" href="{{route('permission-form')}}"><i class="icon-calendar"></i>İzin Belgesi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="plugins-draggable-cards.html"><i class="icon-cursor-move"></i> İzin Listesi</a>
              </li>
          </li>
          </ul>
          <li class="nav-item">
          <a class="nav-link" href="{{route('salary-info')}}"><i class="icon-cursor-move"></i>Ödeme Bilgisi</a>
            </li>
          <li class="nav-item">
                <a class="nav-link" href="plugins-draggable-cards.html"><i class="icon-cursor-move"></i>Duyurular</a>
              </li>
         
      </nav>
      <button class="sidebar-minimizer brand-minimizer" type="button"></button>