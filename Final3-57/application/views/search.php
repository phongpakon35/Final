<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>                                                                                                  
 <head>
  
   <meta charset="UTF-8">
  <title> ค้นหาสินค้า </title>
    <link href="<?php echo base_url('asesst/css/bootstrap.min.css');?>" rel="stylesheet" >
    <link href="<?php echo base_url('asesst/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('asesst/css/freelancer.css');?>" rel="stylesheet">
    <script src="<?php echo base_url('asesst/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('asesst/js/jquery-1.11.2.min.js');?>"></script>

<style>
    /*

    * Based on Cover by https://twitter.com/mdo"  @mdo
    * added cover image and background color to match (green)
    *
    * Globals

    */

    /* Links */
    a,
    a:focus,
    a:hover {
      color: #fff;
    }

    /* Custom default button */
    .btn-default,
    .btn-default:hover,
    .btn-default:focus {
      color: #333;
      text-shadow: none; /* Prevent inheritence from `body` */
      background-color: #fff;
      border: 1px solid #fff;
    }


    /*
     * Base structure
     */

    html,
    body { 
    /*css for full size background image*/
      background: url(http://www.bloggang.com/data/inkispy/picture/1257736036.jpg) no-repeat center center fixed; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      
      height: 100%;
      background-color: #060;
      color: #fff;
      text-align: center;
      text-shadow: 0 1px 3px rgba(0,0,0,.5);
     
    }

    /* Extra markup and styles for table-esque vertical and horizontal centering */
    .site-wrapper {
      display: table;
      width: 100%;
      height: 100%; /* For at least Firefox */
      min-height: 100%;
      -webkit-box-shadow: inset 0 0 100px rgba(0,0,0,.5);
              box-shadow: inset 0 0 100px rgba(0,0,0,.5);
    }
    .site-wrapper-inner {
      display: table-cell;
      vertical-align: top;
    }
    .cover-container {
      margin-right: auto;
      margin-left: auto;
    }

    /* Padding for spacing */
    .inner {

      padding: 30px;
    }


    /*
     * Header
     */
    .masthead-brand {
      margin-top: 10px;
      margin-bottom: 10px;
    }

    .masthead-nav > li {
      display: inline-block;
    }
    .masthead-nav > li + li {
      margin-left: 20px;
    }
    .masthead-nav > li > a {
      padding-right: 0;
      padding-left: 0;
      font-size: 16px;
      font-weight: bold;
      color: #fff; /* IE8 proofing */
      color: rgba(255,255,255,.95);
      border-bottom: 2px solid transparent;
    }
    .masthead-nav > li > a:hover,
    .masthead-nav > li > a:focus {
      background-color: transparent;
      border-bottom-color: #a9a9a9;
      border-bottom-color: rgba(255,255,255,.25);
    }
    .masthead-nav > .active > a,
    .masthead-nav > .active > a:hover,
    .masthead-nav > .active > a:focus {
      color: #fff;
      border-bottom-color: #fff;
    }

    @media (min-width: 768px) {
      .masthead-brand {
        float: left;
      }
      .masthead-nav {
        float: right;
      }
    }


    /*
     * Cover
     */

    .cover {
      padding: 0 20px;
    }
    .cover .btn-lg {
      padding: 10px 20px;
      font-weight: bold;
    }


    /*
     * Footer
     */

    .mastfoot {
      color: #999; /* IE8 proofing */
      color: rgba(255,255,255,.5);
    }


    /*
     * Affix and center
     */

    @media (min-width: 768px) {
      /* Pull out the header and footer */
      .masthead {
        position: fixed;
        top: 0;
      }
      .mastfoot {
        position: fixed;
        bottom: 0;
      }
      /* Start the vertical centering */
      .site-wrapper-inner {
        vertical-align: middle;
      }
      /* Handle the widths */
      .masthead,
      .mastfoot,
      .cover-container {
        width: 100%; /* Must be percentage or pixels for horizontal alignment */
      }
    }

    @media (min-width: 992px) {
      .masthead,
      .mastfoot,
      .cover-container {
        width: 700px;
      }
    }

			/* ปุ่มค้นหา */

   .btn3d, .btn3d:focus {
    position:relative;
    top: -6px;
    border:0;
    -moz-outline-style:none;
         outline:medium none;
     transition: all 0.04s linear;
     margin-top:10px;
     margin-bottom:10px;
     margin-left:2px;
     margin-right:2px;
	}
	.btn3d:active, .btn3d.active {
	    top:2px;
	}
	.btn3d.btn-white {
    color: #666666;
    box-shadow:0 0 0 1px #ebebeb inset, 0 0 0 2px rgba(255,255,255,0.10) inset, 0 8px 0 0 #f5f5f5, 0 8px 8px 1px rgba(0,0,0,.2);
    background-color:#fff;
	}
	.btn3d.btn-white:active, .btn3d.btn-white.active {
	    color: #666666;
	    box-shadow:0 0 0 1px #ebebeb inset, 0 0 0 1px rgba(255,255,255,0.15) inset, 0 1px 3px 1px rgba(0,0,0,.1);
	    background-color:#fff;
	}

 


  .table{

      text-shadow: 0px 1px 70px rgba(0, 0, 0, 0.5);

  }

  .success{
 
    font-size: 18px;
    font-style:italic;
    font-weight:bold;
    padding: 5px;
    margin:  5px;
    text-indent:2px;


  }

  
</style>





  
 </head>

 <body>


    <div class="site-wrapper" action="<?php echo base_url('index.php/Search');?>">
      <div class="site-wrapper-inner">
        <div class="cover-container">
          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">บริษัทสตาร์เวย์</h3>

              <ul class="nav masthead-nav">
                <li >
                  <a href="<?php echo base_url('index.php');?>">หน้าหลัก</a>
                </li>

                <li class="active">
                  <a href="#">ค้นหาหนังสือ</a>
                </li>

              </ul>
            </div>
          </div>
          			



                   <table class="table">
                        <thead>
                          <tr class="success"' >
                            <td><?php

                                  if($Dataall)
                                  {
                                   
                                    {
                                    echo '#รหัสสินค้า';
                                   
                                    }
                                  }
                                  else
                                  {
                                   
                                  }

                                ?>
                          </td>
                           <td><?php

                                  if($Dataall)
                                  {
                                   
                                    {
                                    echo 'ชื่อสินค้า';
                                   
                                    }
                                  }
                                  else
                                  {
                                   
                                  }

                                ?>
                          </td> 
                          <td><?php

                                  if($Dataall)
                                  {
                                   
                                    {
                                    echo 'ราคาขาย';
                                   
                                    }
                                  }
                                  else
                                  {
                                   
                                  }

                                ?>
                          </td>
                          <td><?php

                                  if($Dataall)
                                  {
                                   
                                    {
                                    echo 'ราคาสมาชิก';
                                   
                                    }
                                  }
                                  else
                                  {
                                   
                                  }

                                ?>
                          </td>
                          <td><?php

                                  if($Dataall)
                                  {
                                   
                                    {
                                    echo 'ประกัน';
                                   
                                    }
                                  }
                                  else
                                  {
                                   
                                  }

                                ?>
                          </td>
                         </tr>
                       </thead>

                       <tbody>
                         <tr  > 
                           <td class="warning">   <?php
                                  if($Dataall)
                                  {
                                  foreach($Dataall->result() as $Dataall1)
                                    {
                                      
                                      echo $Dataall1->productCode.'<br>'.'<br>' ;
                                    
                                    }
                                  }
                                    else
                                    {
                                       
                                    }
                                    ?>    
                          </td> 
                          <td class="danger" >   <?php
                                  foreach($Dataall->result() as $Dataall1)
                                  {
                                    
                                    echo $Dataall1->productName.'<br>'.'<br>';
                                  
                                  }
                                  ?>    
                          </td>

                          <td class="warning">  <?php
                                  foreach($Dataall->result() as $Dataall1)
                                  {
                                    
                                    echo $Dataall1->productSell.'<br>'.'<br>';
                                  
                                  }
                                  ?>    
                          </td>
                          <td class="warning">  <?php
                                  foreach($Dataall->result() as $Dataall1)
                                  {
                                    
                                    echo $Dataall1->productSellMember.'<br>'.'<br>';
                                  
                                  }
                                  ?>    
                          </td>
                          <td class="danger">  <?php
                                  foreach($Dataall->result() as $Dataall1)
                                  {
                                    
                                    echo $Dataall1->warranty.'<br>'.'<br>';
                                  
                                  }
                                  ?>    
                          </td>

                        </tr>
                       <tbody>
                     </table>

          	         
                           

					         
          <div class="mastfoot">
            <div class="inner">
              <!-- Validation -->
              <p>Template by.<a href=
              "http://bootsnipp.com//"> bootsnipp</a></p>
            </div>
          </div>
        </div>
    </div>
    </div>
        
  

 </body>
</html>