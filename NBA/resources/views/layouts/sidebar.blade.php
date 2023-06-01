  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="/" class="brand-link">
          <img src="dist/img/NBA-Logo.png" alt="NBA Logo" class="brand-image elevation-0"
              style="opacity: .8; margin-left: -5px">
          <span class="brand-text font-weight-light">NBA 2017/2018</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-solid fa-trophy"></i>
                        <p>
                            Estadisticas Equipos
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('equipo-mas-titulos') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Mas Titulos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('equipo-playoffs') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Clasificacion a Playoffs</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('equipo-victorias') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Mas Victorias</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('equipo-mas-puntos') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Mas Puntos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('equipo-triples') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Mas Triples</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('equipo-libres') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Mas Libres</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('equipo-asistencias') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Mas Asistencias</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('equipo-perdidas') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Mas Perdidas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('equipo-robos') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Mas Robos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('equipo-tapas') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Mas Tapas</p>
                            </a>
                        </li>
                    </ul>
                </li>

                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fa-solid fa-file-excel"></i>
                          <p>
                              Importar Excel
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('ruta-jugadores') }}" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Jugadores</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('ruta-jugadores-equipos') }}" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Jugador-Equipo</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('ruta-estadisticas-jugadores-equipos') }}" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Estadisticas-Jugador-Equipo</p>
                              </a>
                          </li>
                      </ul>
                  </li>
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>
