          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Aniversariantes do mês</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Telefone</th>
                      <th>Data de Aniversário</th>
                      <th>Instituições</th>
                    </tr>
                  </thead>
                  <tbody>
      							<?php foreach($viuvas -> result() as $viuva): ?>
      							<tr id="viuvas-<?= $viuva->id_viuva; ?>" <?=($viuva->status != "A") ? 'class="table-danger"':''?> data-nome="<?= $viuva->nome; ?> "data-id_viuva="<?= $viuva->id_viuva; ?>">
      								<td class="linha_destaque" data-url="<?= base_url("viuvas/editar_viuva/{$viuva->id_viuva}")?>"><?= $viuva->nome; ?></td>
      								<td class="linha_destaque" data-url="<?= base_url("viuvas/editar_viuva/{$viuva->id_viuva}")?>"><?= $viuva->telefone; ?></td>
      								<td class="linha_destaque" data-url="<?= base_url("viuvas/editar_viuva/{$viuva->id_viuva}")?>"><?= $viuva->data_nascimento; ?></td>
									<td class="linha_destaque" data-url="<?= base_url("viuvas/editar_viuva/{$viuva->id_viuva}")?>"><?= $viuva->nome_instituicao; ?></td>
      							</tr>
      							<?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
		
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
var id_viuva = $(this).parent().parent().data("id_viuva");
swal({
  title: "Deseja realmente excluir?",
  text: "Viuva: " + id_viuva + " - " + nome + ".",
  type: "warning",
  showCancelButton: true,
  cancelButtonClass: "btn-default",
  confirmButtonClass: "btn-danger",
  confirmButtonText: "Excluir",
  closeOnConfirm: false
},
function(){
  $.post("<?= base_url('pessoas/excluir_viuva'); ?>",
  {id_viuva: id_viuva},
  function(data){
    if (data == 1) {
      swal({
        title: "Excluido!",
        text: "Viuva excluida.",
        type: "success",
        confirmButtonClass: "btn-success"
      },
      function(){
        $('#viuvas-'+id_viuva).remove();
      });
    } else {
      swal({
        title: "Cancelado!",
        text: "Viuva não pode ser excluida pois já existe movimentação, a mesma será desativado.",
        type: "error",
        confirmButtonClass: "btn-danger"
      },
      function(){
        $('#viuvas-'+id_viuva).addClass("table-danger");
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

