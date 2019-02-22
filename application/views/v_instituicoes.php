      <li class="breadcrumb-item active">Instituições</li>
        <a id="botao-novo" class="btn btn-success btn-sm" href="<?= base_url('instituicoes/nova_instituicao')?>"><i class="font-icon fa fa-plus"></i> Novo</a>
    </ol>

    <div class="page-content" id="tabela">
  		<div class="container-fluid">
  			<section class="box-typical box-panel mb-4">
                  <div class="widget-container fluid-height">
    <!-- DataTables Example -->
    <div class="box-typical-body">
      <table id="instituicoes" class="table table-bordered" cellspacing="0" width="100%">
      							<thead>
      							<tr>
      								<th>Nome</th>
      								<th>Telefone</th>
      								<th>Funções</th>
      							</tr>
      							</thead>
      							<tbody>
      							<?php foreach($instituicoes -> result() as $instituicao): ?>
      							<tr id="instituicoes-<?= $instituicao->id_instituicao; ?>" <?=($instituicao->status != "A") ? 'class="table-danger"':''?> data-nome="<?= $instituicao->nome; ?> "data-id_instituicao="<?= $instituicao->id_instituicao; ?>">
      								<td class="linha_destaque" data-url="<?= base_url("instituicoes/editar_instituicao/{$instituicao->id_instituicao}")?>"><?= $instituicao->nome; ?></td>
      								<td class="linha_destaque" data-url="<?= base_url("instituicoes/editar_instituicao/{$instituicao->id_instituicao}")?>"><?= $instituicao->telefone; ?></td>
      								<td width="10px" id="funcoes">
									<a href="<?= base_url("instituicoes/editar_instituicao/{$instituicao->id_instituicao}")?>"><i class="fa fa-edit" style="font-size:20px; margin-left: 10px;" title="Alterar"></i></a>
      								<a href="<?= base_url("instituicoes/excluir_instituicao/{$instituicao->id_instituicao}")?>"><i class="fa fa-user-times" style="font-size:20px; margin-left: 10px;" title="Excluir"></i></a>
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
$('#instituicoes').DataTable({
responsive: true
});


$("#instituicoes").on("click", "#excluir", function () {
var nome = $(this).parent().parent().data("nome");
var id_instituicao = $(this).parent().parent().data("id_instituicao");
swal({
  title: "Deseja realmente excluir?",
  text: "instituicao: " + id_instituicao + " - " + nome + ".",
  type: "warning",
  showCancelButton: true,
  cancelButtonClass: "btn-default",
  confirmButtonClass: "btn-danger",
  confirmButtonText: "Excluir",
  closeOnConfirm: false
},
function(){
  $.post("<?= base_url('pessoas/excluir_instituicao'); ?>",
  {id_instituicao: id_instituicao},
  function(data){
    if (data == 1) {
      swal({
        title: "Excluido!",
        text: "instituicao excluida.",
        type: "success",
        confirmButtonClass: "btn-success"
      },
      function(){
        $('#instituicoes-'+id_instituicao).remove();
      });
    } else {
      swal({
        title: "Cancelado!",
        text: "instituicao não pode ser excluida pois já existe movimentação, a mesma será desativado.",
        type: "error",
        confirmButtonClass: "btn-danger"
      },
      function(){
        $('#instituicoes-'+id_instituicao).addClass("table-danger");
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
