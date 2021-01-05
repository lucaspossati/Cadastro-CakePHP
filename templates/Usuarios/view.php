<section class="content-header">
  <h1>
    Usuario
    <small><?php echo __('View'); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo $this->Url->build(['action' => 'index']); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Home'); ?></a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-info"></i>
          <h3 class="box-title"><?php echo __('Information'); ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <dl class="dl-horizontal">
            <dt scope="row"><?= __('Nome') ?></dt>
            <dd><?= h($usuario->nome) ?></dd>
            <dt scope="row"><?= __('Email') ?></dt>
            <dd><?= h($usuario->email) ?></dd>
            <dt scope="row"><?= __('Senha') ?></dt>
            <dd><?= h($usuario->senha) ?></dd>
            <dt scope="row"><?= __('Role') ?></dt>
            <dd><?= $usuario->has('role') ? $this->Html->link($usuario->role->role, ['controller' => 'Roles', 'action' => 'view', $usuario->role->id]) : '' ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($usuario->id) ?></dd>
            <dt scope="row"><?= __('Created') ?></dt>
            <dd><?= h($usuario->created) ?></dd>
            <dt scope="row"><?= __('Modified') ?></dt>
            <dd><?= h($usuario->modified) ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

</section>
