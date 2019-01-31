<aside class="main-sidebar">
   <!-- sidebar: style can be found in sidebar.less -->
   <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
         <div class="pull-left image">
            <img src="<?= base_url(); ?>assets/dist/img/Manzana.png" class="img-circle" alt="User Image">
         </div>
         <div class="pull-left info">
            <?php
            $nombreSolo = $this->session->userdata('puroNom');
            echo  "<p>$nombreSolo</p>"
            ?>
<!--            <p>Ernesto</p>-->
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
         </div>
      </div>
      <!-- search form -->
      <!--<form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
         <li class="header">MAIN NAVIGATION</li>
         <!--Para activar el menu es con active treview-->
         <!-- <li class="active treeview">-->
         <li class="treeview">
            <a href="#">
               <i class="glyphicon glyphicon-user"></i> <span>Crear</span>
               <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
               <?php
               $vRegisttro = new mlogin();
               $baseURL = base_url();
               if ($vRegisttro->appGrupo('vregistro', $this->session->userdata('tipoGrupo')) == 1) {
                  echo "<li class='active'><a href='$baseURL/CPrincipal/registrarMiembro'><i class='fa fa-circle-o'></i>
                     Registrar Usuario</a></li>";
               }
               ?>
               <?php
               $vRegisttro1 = new mlogin();
               $baseURL = base_url();
               if ($vRegisttro1->appGrupo('vregistragrupo', $this->session->userdata('tipoGrupo')) == 1) {
                  echo " <li><a href='$baseURL/Cgrupo/crearGrupo'><i class='fa fa-circle-o'></i> Crear Grupo</a></li>";
               }
               ?>

            </ul>
         </li>
         <li class="treeview">
            <a href="#">
               <i class="fa fa-users"></i> <span>Mostrar</span>
               <span class="pull-right-container">
				<i class="fa fa-angle-left pull-right"></i>
                  <!--<span class="label label-primary pull-right">4</span>-->
            </span>
            </a>
            <ul class="treeview-menu">
               <?php
               $vRegisttro2 = new mlogin();
               $baseURL = base_url();
               if ($vRegisttro2->appGrupo('vusuarios', $this->session->userdata('tipoGrupo')) == 1) {
                  echo "<li><a href='$baseURL/CMostrar/mostrarUsuarios'><i class='fa fa-user'></i>Usuarios</a></li>";
               }
               ?>
               <?php
               $vRegisttro3 = new mlogin();
               $baseURL = base_url();
               if ($vRegisttro3->appGrupo('vgrupo', $this->session->userdata('tipoGrupo')) == 1) {
                  echo " <li><a href='$baseURL/CMostrar/mostrarGrupos'><i class='fa fa-list-alt'></i>Grupos</a></li>";
               }
               ?>

               <!-- <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
                <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li> -->
            </ul>
         </li>
         <li class="treeview">
            <a href="#">
               <i class="fa fa-archive"></i> <span>Inventario</span>
               <span class="pull-right-container">
				<i class="fa fa-angle-left pull-right"></i>
                  <!--<span class="label label-primary pull-right">4</span>-->
             </span>
            </a>
            <ul class="treeview-menu">
               <?php
               $vRegisttro4 = new mlogin();
               $baseURL = base_url();
               if ($vRegisttro4->appGrupo('vmaterial', $this->session->userdata('tipoGrupo')) == 1) {
                  echo " <li><a href='$baseURL/CInventario/vMaterial'><i class='fa fa-wrench'></i>Materiales</a></li>";
               }
               ?>
               <?php
               $vRegisttro5 = new mlogin();
               $baseURL = base_url();
               if ($vRegisttro5->appGrupo('vproductomedico', $this->session->userdata('tipoGrupo')) == 1) {
                  echo " <li><a href='$baseURL/CProducto/vProducto'><i class='fa fa-medkit'></i>Producto Medico</a></li>";
               }
               ?>
            </ul>
         </li>
         <li class="treeview">
            <a href="#">
               <i class="fa fa-calendar" aria-hidden="true"></i> <span>Citas</span>
               <span class="pull-right-container">
				<i class="fa fa-angle-left pull-right"></i>
                  <!--<span class="label label-primary pull-right">4</span>-->
             </span>
            </a>
            <ul class="treeview-menu">
               <?php
               $vRegisttro5 = new mlogin();
               $baseURL = base_url();
               if ($vRegisttro5->appGrupo('vcita', $this->session->userdata('tipoGrupo')) == 1) {
                  echo " <li><a href='$baseURL/Ccita/vCitas'> <i class='fa fa-address-book-o' aria-hidden='true'></i>Agregar
                     nueva cita</a></li>";
               }
               ?>
               <?php
               $vRegisttro5 = new mlogin();
               $baseURL = base_url();
               if ($vRegisttro5->appGrupo('VListaCita', $this->session->userdata('tipoGrupo')) == 1) {
                  echo " <li><a href='$baseURL/CListaCita/listaCita'><i class='fa fa-list-alt' aria-hidden='true'></i>Mostar
                     citas</a></li>";
               }
               ?>
               <!--               <li><a href="-->
               <?php //echo base_url(); ?><!--Cexcel/generar_excel"><i class="fa fa-list-alt" aria-hidden="true"></i>Exportar Excel</a></li>-->
            </ul>
         </li>
         <li class="treeview">
            <a href="#">
               <i class="fa fa-credit-card-alt" aria-hidden="true"></i> <span>Nominas</span>
               <span class="pull-right-container">
				<i class="fa fa-angle-left pull-right"></i>
                  <!--<span class="label label-primary pull-right">4</span>-->
             </span>
            </a>
            <ul class="treeview-menu">
               <?php
               $vRegisttro5 = new mlogin();
               $baseURL = base_url();
               if ($vRegisttro5->appGrupo('vnomina', $this->session->userdata('tipoGrupo')) == 1) {
                  echo " <li><a href='$baseURL/Cnomina/ListaNomina'><i class='fa fa-money' aria-hidden='true'></i>Ver Nomina</a></li>";
               }
               ?>

               <!--<li><a href="<?/*= base_url() */?>CListaCita/listaCita"><i class="fa fa-list-alt" aria-hidden="true"></i>Mostar citas</a></li>-->

               <!--               <li><a href="--><?php //echo base_url(); ?><!--Cexcel/generar_excel"><i class="fa fa-list-alt" aria-hidden="true"></i>Exportar Excel</a></li>-->
            </ul>
         </li>
         <li class="treeview">
            <a href="#">
               <i class="fa fa-file" aria-hidden="true"></i> <span>Facturacion</span>
               <span class="pull-right-container">
				<i class="fa fa-angle-left pull-right"></i>
                  <!--<span class="label label-primary pull-right">4</span>-->
             </span>
            </a>
            <ul class="treeview-menu">
               <li><a href="<?= base_url() ?>Cfactura/vFactura"><i class="fa fa-address-book-o" aria-hidden="true"></i>CREAR FACTURA</a></li>
               <li><a href="<?php echo base_url(); ?>CexcelFactura/generar_excel" ><i class="fa fa-file-excel-o" aria-hidden="true"></i>Importa Factura</a></li>


            </ul>
         </li>

   </section>
</aside>

<!-- Content Wrapper. Contains page content
Contenedor de contenido. Contiene el contenido de la página -->
<div class="content-wrapper">
   <div class="content">
