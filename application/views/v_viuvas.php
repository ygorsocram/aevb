      <li class="breadcrumb-item active">Viuvas</li>
        <a id="botao-novo" class="btn btn-success btn-sm" href="<?= base_url('viuvas/cadastrar')?>"><i class="font-icon fa fa-plus"></i> Novo</a>
    </ol>

    <div class="page-content" id="tabela">
  		<div class="container-fluid">
  			<section class="box-typical box-panel mb-4">
                  <div class="widget-container fluid-height">
    <!-- DataTables Example -->
    <div class="box-typical-body">
      <table id="viuvas" class="table table-bordered" cellspacing="0" width="100%">
      							<thead>
      							<tr>
      								<th>CPF</th>
      								<th>Nome</th>
      								<th>Telefone</th>
      								<th>Funções</th>
      							</tr>
      							</thead>
      							<tbody>
      							<?php foreach($viuvas -> result() as $viuva): ?>
      							<tr id="viuvas-<?= $viuva->id_pessoa; ?>" <?=($viuva->status != "A") ? 'class="table-danger"':''?> data-nome="<?= $viuva->nome; ?> "data-id_pessoa="<?= $viuva->id_pessoa; ?>">
      								<td>
      								<?php
      									echo mask("###.###.###-##", $viuva->cpf);
      								 ?>
      								</td>
      								<td class="linha_destaque" data-url="<?= base_url("viuvas/editar/{$viuva->id_pessoa}")?>"><?= $viuva->nome; ?></td>
      								<td class="linha_destaque" data-url="<?= base_url("viuvas/editar/{$viuva->id_pessoa}")?>"><?= $viuva->telefone; ?></td>
      								<td width="10px" align="center">
      									<span id="alterar" style="color: #218838; cursor: pointer;" <i class="fa fa-user-plus"></i></span>
                        <span id="excluir" style="color: #d52323; cursor: pointer;" <i class="fa fa-user-times"></i></span>
      								</td>
      							</tr>
      							<?php endforeach; ?>
      							</tbody>
      						</table>
    </div>
  <!-- /.container-fluid -->
</div>
</section>
</div>
</div>
<!--.page-content-->

<!--padrao-->
<script src="<?= base_url('include');?>/js/lib/jquery/jquery-3.2.1.min.js"></script>
<script src="<?= base_url('include');?>/js/lib/popper/popper.min.js"></script>
<script src="<?= base_url('include');?>/js/lib/bootstrap/bootstrap.min.js"></script>
<script src="<?= base_url('include');?>/js/plugins.js"></script>
<!--datatables-->
<script src="<?= base_url('include');?>/js/lib/datatables-net/datatables.min.js"></script>
<!--sweetalert-->
<script src="<?= base_url('include');?>/js/lib/bootstrap-sweetalert/sweetalert.min.js"></script>
<script>
$(function(){
$('table tbody tr').hover(
function(){
  $(this).addClass('destaque');
},
function(){
  $(this).removeClass('destaque');
}
);
$('.linha_destaque').click(function(){
window.location = $(this).data('url');
});
});

$(function() {
$('#viuvas').DataTable({
responsive: true
});


$("#viuvas").on("click", "#excluir", function () {
var nome = $(this).parent().parent().data("nome");
var id_pessoa = $(this).parent().parent().data("id_pessoa");
swal({
  title: "Deseja realmente excluir?",
  text: "Viuva: " + id_pessoa + " - " + nome + ".",
  type: "warning",
  showCancelButton: true,
  cancelButtonClass: "btn-default",
  confirmButtonClass: "btn-danger",
  confirmButtonText: "Excluir",
  closeOnConfirm: false
},
function(){
  $.post("<?= base_url('pessoas/excluir_viuva'); ?>",
  {id_pessoa: id_pessoa},
  function(data){
    if (data == 1) {
      swal({
        title: "Excluido!",
        text: "Viuva excluida.",
        type: "success",
        confirmButtonClass: "btn-success"
      },
      function(){
        $('#viuvas-'+id_pessoa).remove();
      });
    } else {
      swal({
        title: "Cancelado!",
        text: "Viuva não pode ser excluida pois já existe movimentação, a mesma será desativado.",
        type: "error",
        confirmButtonClass: "btn-danger"
      },
      function(){
        $('#viuvas-'+id_pessoa).addClass("table-danger");
      });
    }
  });
});
});
});

/***********************MENSAGEM*******************************/
if(sessionStorage.getItem("titulo") != null){
swal({
  title: sessionStorage.getItem("titulo"),
  text: sessionStorage.getItem("mensagem"),
  type: sessionStorage.getItem("tipo"),
  confirmButtonClass: "btn-primary"
});
sessionStorage.clear();
}
/***********************MENSAGEM*******************************/
</script>

<script src="<?= base_url('include');?>/js/app.js"></script>
