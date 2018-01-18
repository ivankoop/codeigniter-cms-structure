<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CMS Structure</title>
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="assets/css/sb-admin.css" rel="stylesheet">
  </head>

  <body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <a class="navbar-brand" href="index.html">CMS Structure</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <?php foreach($menu_items as $big_item): ?>
          <?php if(isset($big_item['second-level'])): ?>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
              <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#<?=$big_item['id']?>" data-parent="#exampleAccordion">
                <i class="fa fa-fw fa-wrench"></i>
                <span class="nav-link-text"><?=$big_item['title']?></span>
              </a>
              <ul class="sidenav-second-level collapse" id="<?=$big_item['id']?>">
                <?php foreach($big_item['second-level'] as $second_item): ?>
                  <li>
                    <?php if(isset($second_item['third-level'])): ?>
                      <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#<?=$second_item['id']?>"><?=$second_item['title']?></a>
                      <ul class="sidenav-third-level collapse" id="<?=$second_item['id']?>">
                        <?php foreach($second_item['third-level'] as $third_item): ?>
                          <li>
                            <a href="<?=$third_item['url']?>"><?=$third_item['title']?></a>
                          </li>
                        <?php endforeach ?>
                      </ul>
                    <?php else: ?>
                      <a href="<?=$second_item['url']?>"><?=$second_item['title']?></a>
                    <?php endif; ?>
                  </li>
                <?php endforeach; ?>
              </ul>
          <?php else: ?>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="<?=$big_item['title']?>">
              <a class="nav-link" href="<?=$big_item['url']?>">
                <i class="fa fa-fw <?=$big_item['icon']?>"></i>
                <span class="nav-link-text"><?=$big_item['title']?></span>
              </a>
            </li>
          <?php endif; ?>
        <?php endforeach; ?>
        </ul>
        <ul class="navbar-nav sidenav-toggler">
          <li class="nav-item">
            <a class="nav-link text-center" id="sidenavToggler">
              <i class="fa fa-fw fa-angle-left"></i>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
              <i class="fa fa-fw fa-sign-out"></i>Logout</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="content-wrapper">
      <div class="container-fluid">
  <!--HEADER END HERE-->
