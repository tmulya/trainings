<script type="text/javascript">
	$('#roleTable').DataTable();

	function addRole() {
      $("#createRoleModal").modal("show");
    }

    function editRole(id, name) {
      $("#editRole").attr('action', '/role/' + id);
      $("#idRole").val(id);
      $("#nameRole").val(name);
      $("#editRoleModal").modal("show");
    }

    function DeleteRole(id) {
    	$("#deleteRole").attr('action', '/role/' + id);
        $('#deleteRoleModal').modal("show");
    }
</script>