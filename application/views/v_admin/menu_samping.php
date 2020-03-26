      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu"> 
                  <li class="sub-menu">
                     <a>
                      <i class="icon_profile"></i>
                          <span><?php echo $_SESSION['nama']; ?></span>
                    </a>
                  </li>           
                  <li class="sub-menu">
                      <a class="" href="<?php echo base_url('c_admin');?>">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
				          <li class="sub-menu">
                          <li>
                            <a class="" href="<?php echo base_url()."show_guru/tampil_admin_guru";?>"> 
                              <i class="icon_book"></i><span>Data Guru</span>
                            </a>
                          </li>
                           <li>
                            <a class="" href="<?php echo base_url()."show_siswa/tampil_admin_siswa";?>"> 
                              <i class="icon_id"></i><span>Data Siswa</span>
                            </a>
                          </li>
                           <li>
                            <a class="" href="<?php echo base_url()."show_siswa/komentar";?>"> 
                              <i class="icon_id-2"></i><span>Komentar</span>
                            </a>
                          </li>
                          <li>
                            <a class="" href="<?php echo base_url()."dashboard/berita";?>"> 
                              <i class="icon_document_alt"></i><span>Berita</span>
                            </a>
                          </li>
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
                  </li> 	-->			  
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
