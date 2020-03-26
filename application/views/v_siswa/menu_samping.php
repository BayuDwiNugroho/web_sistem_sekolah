      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="sub-menu">
                     <a>
                      <i class="icon_profile"></i>
                          <span><?php echo $_SESSION['username']; ?></span>
                    </a>
                  </li>
                  <li class="active">
                      <a class="" href="<?php echo base_url('c_siswa');?>">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

          <li class="sub-menu">
                      <li><a class="" href="<?php echo base_url()."show_siswa/data_nilai";?>">Laporan Nilai</a></li>
                      <li><a class="" href="<?php echo base_url()."show_siswa/data_guru";?>">Data Guru</a></li>                 
                      <li><a class="" href="<?php echo base_url()."show_siswa/data_siswa";?>">Data Siswa</a></li>
                      <li><a class="" href="<?php echo base_url()."c_siswa";?>">Buku Tamu</a></li>


                  </li> 
          <!--<li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Transaction</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="index.php?page=order">Order</a></li>                          
                          <li><a class="" href="index.php?page=payment">Payment</a></li>
                      </ul>
                  </li>           
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
