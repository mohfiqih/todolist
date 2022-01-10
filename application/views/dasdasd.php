<?php if ($this->user_level == 1 or $this->user_level == 2):?>

<!--- Sidemenu -->
<div id="sidebar-menu">
     <ul id="side-menu">
          <li class="menu-title">Navigation</li>
          <li>
               <a href="<?php echo base_url('Dasbor/index'); ?>">
                    <i class="mdi mdi-view-dashboard"></i>
                    <span>Dasbor</span>
               </a>
          </li>
          <li>
               <a href="<?php echo base_url('todo'); ?>">
                    <i class="mdi mdi-clipboard-list"></i>
                    <span>Todo-List</span>
               </a>
          </li>
          <li>
               <a href="#sidebarMultilevel" data-bs-toggle="collapse">
                    <i class="mdi mdi-share-variant"></i>
                    <span> Multi Level </span>
                    <span class="menu-arrow"></span>
               </a>
               <div class="collapse" id="sidebarMultilevel">
                    <ul class="nav-second-level">
                         <li>
                              <a href="#sidebarMultilevel2" data-bs-toggle="collapse">
                                   Second Level <span class="menu-arrow"></span>
                              </a>
                              <div class="collapse" id="sidebarMultilevel2">
                                   <ul class="nav-second-level">
                                        <li>
                                             <a href="javascript: void(0);">Item 1</a>
                                        </li>
                                        <li>
                                             <a href="javascript: void(0);">Item 2</a>
                                        </li>
                                   </ul>
                              </div>
                         </li>

                         <li>
                              <a href="#sidebarMultilevel3" data-bs-toggle="collapse">
                                   Third Level <span class="menu-arrow"></span>
                              </a>
                              <div class="collapse" id="sidebarMultilevel3">
                                   <ul class="nav-second-level">
                                        <li>
                                             <a href="javascript: void(0);">Item 1</a>
                                        </li>
                                        <li>
                                             <a href="#sidebarMultilevel4"
                                                  data-bs-toggle="collapse">
                                                  Item 2 <span class="menu-arrow"></span>
                                             </a>
                                             <div class="collapse" id="sidebarMultilevel4">
                                                  <ul class="nav-second-level">
                                                       <li>
                                                            <a href="javascript: void(0);">Item
                                                                 1</a>
                                                       </li>
                                                       <li>
                                                            <a href="javascript: void(0);">Item
                                                                 2</a>
                                                       </li>
                                                  </ul>
                                             </div>
                                        </li>
                                   </ul>
                              </div>
                         </li>
                    </ul>
               </div>
          </li>

          <li class="menu-title mt-2">Master Data</li>
          <li>
               <a href="<?php echo base_url('user'); ?>">
                    <i class="fa fa-users"></i>
                    <span>User</span>
               </a>
          </li>
     </ul>

</div>
<!-- End Sidebar -->

<?php else: ?>

<!--- Sidemenu -->
<div id="sidebar-menu">
     <ul id="side-menu">
          <li class="menu-title">Navigation</li>
          <li>
               <a href="<?php echo base_url('Dasbor/index'); ?>">
                    <i class="mdi mdi-view-dashboard"></i>
                    <span>Dasbor</span>
               </a>
          </li>
          <li>
               <a href="<?php echo base_url('todo'); ?>">
                    <i class="mdi mdi-clipboard-list"></i>
                    <span>Todo-List</span>
               </a>
          </li>
          <li>
               <a href="#sidebarMultilevel" data-bs-toggle="collapse">
                    <i class="mdi mdi-share-variant"></i>
                    <span> Multi Level </span>
                    <span class="menu-arrow"></span>
               </a>
               <div class="collapse" id="sidebarMultilevel">
                    <ul class="nav-second-level">
                         <li>
                              <a href="#sidebarMultilevel2" data-bs-toggle="collapse">
                                   Second Level <span class="menu-arrow"></span>
                              </a>
                              <div class="collapse" id="sidebarMultilevel2">
                                   <ul class="nav-second-level">
                                        <li>
                                             <a href="javascript: void(0);">Item 1</a>
                                        </li>
                                        <li>
                                             <a href="javascript: void(0);">Item 2</a>
                                        </li>
                                   </ul>
                              </div>
                         </li>

                         <li>
                              <a href="#sidebarMultilevel3" data-bs-toggle="collapse">
                                   Third Level <span class="menu-arrow"></span>
                              </a>
                              <div class="collapse" id="sidebarMultilevel3">
                                   <ul class="nav-second-level">
                                        <li>
                                             <a href="javascript: void(0);">Item 1</a>
                                        </li>
                                        <li>
                                             <a href="#sidebarMultilevel4"
                                                  data-bs-toggle="collapse">
                                                  Item 2 <span class="menu-arrow"></span>
                                             </a>
                                             <div class="collapse" id="sidebarMultilevel4">
                                                  <ul class="nav-second-level">
                                                       <li>
                                                            <a href="javascript: void(0);">Item
                                                                 1</a>
                                                       </li>
                                                       <li>
                                                            <a href="javascript: void(0);">Item
                                                                 2</a>
                                                       </li>
                                                  </ul>
                                             </div>
                                        </li>
                                   </ul>
                              </div>
                         </li>
                    </ul>
               </div>
          </li>
     </ul>
</div>

<?php endif; ?> 