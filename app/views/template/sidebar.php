<<<<<<< HEAD
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
      
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
     
        <?php if( $data['title']=='user' ){?><li class="active"><?php }else { ?><li> <?php } ?>
        
          <a href="<?= BASEURL; ?>user">
            <i class="fa fa-user" ></i> <span>USER</span>
            <span class="pull-right-container"></span>
          </a>
        </li>
        

        <li>
          <a href="pages/widgets.html">
            <i class="fa fa-th"></i> <span>BELI KREDIT</span>
            <span class="pull-right-container">
              <small id="sisacredit" class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>

        <!-- untuk sidebar menu contact -->        
        <?php if( $data['title']=='phonebook' ){?><li class="active"><?php }else { ?><li><?php } ?>
        
          <a href="<?= BASEURL; ?>phonebook">
            <i class="fa fa-book" ></i> <span>PHONEBOOKS</span>
            <span class="pull-right-container"></span>
          </a>
        </li>
        

        <!-- untuk sidebar menu sms -->        
        <?php if( $data['title']=='message' ){?>
        <li class="active">
          <a href="<?= BASEURL; ?>message">
            <i class="fa fa-envelope" ></i> <span>MESSAGE</span>
            <span class="pull-right-container"></span>
          </a>
        </li>
        <?php }else { ?>
          <li>
          <a href="<?= BASEURL; ?>message">
            <i class="fa fa-envelope"></i> <span>MESSAGE</span>
            <span class="pull-right-container"></span>
          </a>
        </li>
        <?php } ?>
        

        
        
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

=======
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
      
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
     
        <?php if( $data['title']=='user' ){?><li class="active"><?php }else { ?><li> <?php } ?>
        
          <a href="<?= BASEURL; ?>user">
            <i class="fa fa-user" ></i> <span>USER</span>
            <span class="pull-right-container"></span>
          </a>
        </li>
        

        <li>
          <a href="pages/widgets.html">
            <i class="fa fa-th"></i> <span>BELI KREDIT</span>
            <span class="pull-right-container">
              <small id="sisacredit" class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>

        <!-- untuk sidebar menu contact -->        
        <?php if( $data['title']=='phonebook' ){?><li class="active"><?php }else { ?><li><?php } ?>
        
          <a href="<?= BASEURL; ?>phonebook">
            <i class="fa fa-book" ></i> <span>PHONEBOOKS</span>
            <span class="pull-right-container"></span>
          </a>
        </li>
        

        <!-- untuk sidebar menu sms -->        
        <?php if( $data['title']=='message' ){?>
        <li class="active">
          <a href="<?= BASEURL; ?>message">
            <i class="fa fa-envelope" ></i> <span>MESSAGE</span>
            <span class="pull-right-container"></span>
          </a>
        </li>
        <?php }else { ?>
          <li>
          <a href="<?= BASEURL; ?>message">
            <i class="fa fa-envelope"></i> <span>MESSAGE</span>
            <span class="pull-right-container"></span>
          </a>
        </li>
        <?php } ?>
        

        
        
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

>>>>>>> 1a877eb8066d2295c3c1f7774ec464b5cbd42538
    